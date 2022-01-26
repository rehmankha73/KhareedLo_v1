<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;

    public $product;

    public $name;
    public $description;
    public $brand;
    public $unit_price;
    public $whole_sale_price;
    public $initial_stock;
    public $current_stock;
    public $in_stock = false;
    public $product_category_id;
    public $featured_image;
    public $featured_image_url;
    public $image_1;
    public $image_1_url;
    public $image_2;
    public $image_2_url;
    public $image_3;
    public $image_3_url;
    public $image_4;
    public $image_4_url;
    public $colors;
    public $sizes;
    public $others;
    public $meta_title;
    public $meta_keywords;
    public $meta_description;

    public function render()
    {
        return view('livewire.admin.product.product-form', [
            'categories' => ProductCategory::query()->select(['id', 'name'])->get(),
        ]);
    }

    public function mount(): void
    {
        if ($this->product) {
            $this->prefillValues();
        }
    }

    private function prefillValues(): void
    {
        $this->name = $this->product->name;
        $this->description = $this->product->description;
        $this->brand = $this->product->brand;
        $this->unit_price = $this->product->unit_price;
        $this->whole_sale_price = $this->product->whole_sale_price;
        $this->initial_stock = $this->product->initial_stock;
        $this->current_stock = $this->product->current_stock;
        $this->in_stock = $this->product->in_stock;
        $this->product_category_id = $this->product->product_category_id;
        $this->featured_image_url = $this->product->featured_image;
        $this->image_1_url = $this->product->image_1;
        $this->image_2_url = $this->product->image_2;
        $this->image_3_url = $this->product->image_3;
        $this->image_4_url = $this->product->image_4;
        $this->colors = $this->product->colors;
        $this->sizes = $this->product->sizes;
        $this->others = $this->product->others;
        $this->meta_title = $this->product->meta_title;
        $this->meta_keywords = $this->product->meta_keywords;
        $this->meta_description = $this->product->meta_description;
    }

    public function submitForm()
    {
        $data = $this->validate();

        if (empty($this->product) && !isset($this->product)) {
            // creating a new product
            $data['product_code'] = $this->generateCode(6);

            if ($this->featured_image) {
                $data['featured_image'] = $this->checkOrStoreImage('featured_image', $this->featured_image, $data['product_code']);
            }

            if ($this->image_1) {
                $data['image_1'] = $this->checkOrStoreImage('image_1', $this->image_1, $data['product_code']);
            }

            if ($this->image_2) {
                $data['image_2'] = $this->checkOrStoreImage('image_2', $this->image_2, $data['product_code']);
            }

            if ($this->image_3) {
                $data['image_3'] = $this->checkOrStoreImage('image_3', $this->image_3, $data['product_code']);
            }
            if ($this->image_4) {
                $data['image_4'] = $this->checkOrStoreImage('image_4', $this->image_4, $data['product_code']);
            }

            Product::query()->create($data);

            session()->flash('success_message', 'Product create successfully!');

        } else {
            // updating existing product
            $data['product_code'] = $this->product->product_code;
            $data['featured_image'] = $this->updateImage('featured_image', $this->featured_image, $this->featured_image_url, $data['product_code']);

            $data['image_1'] = $this->updateImage('image_1', $this->image_1, $this->image_1_url, $data['product_code']);

            $data['image_2'] = $this->updateImage('image_2', $this->image_2, $this->image_2_url, $data['product_code']);

            $data['image_3'] = $this->updateImage('image_3', $this->image_3, $this->image_3_url, $data['product_code']);

            $data['image_4'] = $this->updateImage('image_4', $this->image_4, $this->image_4_url, $data['product_code']);

            $this->product->update($data);

            session()->flash('success_message', 'Product update successfully!');
        }

        return redirect()->route('admin.products.index');
    }

    private function generateCode($num = 6): string
    {
        $string = '0123456789';
        $code = '';
        for ($i = 0; $i < $num; $i++) {
            $code .= substr($string, (rand() % (strlen($string))), 1);
        }
        return $code;
    }

    private function checkOrStoreImage($name, $image, $product_code)
    {
        $data = [];
        if ($image && !is_string($image)) {
            $data[$name] = $image->store('public/product/' . $product_code);
        }
        return $data[$name];
    }

    private function updateImage($name, $image, $image_url, $product_code)
    {
        $data = [];
        if ($image) {
            Storage::delete($image_url);
            $data[$name] = $image->store('public/product/' . $product_code);
        } else {
            $data[$name] = $image_url;
        }
        return $data[$name];
    }

    public function removeImage($field, $image_url): void
    {
        $this->product->update([$field => '']);
        Storage::delete($image_url);
        $this->render();
    }

    public function getRules()
    {
        $rules = [
            'product_category_id' => ['required', 'exists:product_categories,id'],
            'name' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
            'brand' => ['required', 'string', 'min:3'],
            'unit_price' => ['required',],
            'whole_sale_price' => ['required',],
            'initial_stock' => ['required', 'numeric'],
            'current_stock' => ['required', 'numeric'],
            'in_stock' => ['required', 'boolean'],
            'colors' => ['nullable', 'string', 'min:3'],
            'sizes' => ['nullable', 'string', 'min:3'],
            'others' => ['nullable', 'string', 'min:3'],
            'meta_title' => ['required', 'string', 'min:3'],
            'meta_keywords' => ['required', 'string', 'min:3'],
            'meta_description' => ['required', 'string', 'min:3'],
            'featured_image' => [
                empty($this->product) ? 'required' : 'nullable',
                'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
            'image_1' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
            'image_2' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
            'image_3' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
            'image_4' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120']
        ];

        return $rules;
    }
}
