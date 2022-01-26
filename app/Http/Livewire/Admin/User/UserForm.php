<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserForm extends Component
{
    use WithFileUploads;

    public $user;

    public $name;
    public $email;
    public $address;
    public $city;
    public $state;
    public $country;
    public $postcode;
    public $phone;
    public $featured_image;
    public $featured_image_url;
    public $password;
    public $password_confirmation;


    public function mount(): void
    {
        if ($this->user) {
            $this->prefillValues();
        }
    }

    private function prefillValues(): void
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->address = $this->user->address;
        $this->city = $this->user->city;
        $this->state = $this->user->state;
        $this->country = $this->user->country;
        $this->postcode = $this->user->postcode;
        $this->phone = $this->user->phone;
        $this->featured_image_url = $this->user->featured_image;
    }

    public function render()
    {
        return view('livewire.admin.user.user-form');
    }

    public function submitForm()
    {
        $data = $this->validate();

        if (empty($this->user) && !isset($this->user)) {
            // creating a new user

            if ($this->featured_image) {
                $data['featured_image'] = $this->featured_image->store('public/user');
            }

            User::query()->create($data);

            session()->flash('success_message', 'User create successfully!');

        } else {
            // updating existing user
            if ($this->featured_image) {
                Storage::delete($this->featured_image_url);
                $data['featured_image'] = $this->featured_image->store('public/user');
            } else {
                $data['featured_image'] = $this->featured_image_url;
            }

            $data['password'] = $this->password ? Hash::make($this->password) : $this->user->password;

            $this->user->update($data);

            session()->flash('success_message', 'User update successfully!');
        }

        return redirect()->route('admin.users.index');
    }

    public function getRules()
    {
        $rules = [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'min:3'],
            'address' => ['required', 'string', 'min:3'],
            'city' => ['required', 'string', 'min:3'],
            'state' => ['required', 'string', 'min:3'],
            'country' => ['required', 'string', 'min:3'],
            'postcode' => ['required', 'string', 'min:3'],
            'phone' => ['required'],
            'password' => ['nullable', 'min:8', 'confirmed'],
            'featured_image' => [
                empty($this->user) ? 'required' : 'nullable',
                'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
        ];

        return $rules;
    }

}
