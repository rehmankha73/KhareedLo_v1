<?php

namespace App\Http\Livewire\Admin\User;

use App\Http\hasDeletion;
use App\Http\hasSorting;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    use hasSorting;
    use hasDeletion;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.admin.user.user-list', [
            'users' => $this->getUsers(),
        ]);
    }

    private function getUsers(): LengthAwarePaginator
    {
        return User::query()
            ->where('id', 'like', '%'.$this->search.'%')
            ->orWhere('name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->when($this->sortByField, function ($query) {
                return $query->orderBy($this->sortByField, $this->sortByDirectionAsc ? 'asc' : 'desc');
            })
            ->latest()->paginate(5);
    }

    public function deleteUser(): void
    {
        User::query()->find((int)$this->deleteId)->delete();
        session()->flash('success_message', 'User deleted successfully!');
        $this->displayDeleteModal = false;
    }
}
