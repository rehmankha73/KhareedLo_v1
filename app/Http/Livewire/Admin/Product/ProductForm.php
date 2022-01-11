<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;

    public $name;
    public $featured_image;
    public $description;
    public $unit_price;
    public $whole_sale_price;
    public $initial_stock;
    public $current_stock;
    public $in_stock = false;
    public $image_1;
    public $image_2;
    public $image_3;
    public $image_4;
    public $meta_title;
    public $meta_keywords;
    public $meta_description;

    public function render()
    {
        return view('livewire.admin.product.product-form', [
            'categories' => ProductCategory::query()->get()
        ]);
    }

    public function submitForm() {
        $data = $this->validate();

        Product::query()->create($data);

        return redirect()->route('admin.products.index');
    }

    public function getRules()
    {
        $rules = [
            'product_category_id' => ['required', 'exists:product_categories,id'],
            'name' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
            'unit_price' => ['required',],
            'whole_sale_price' => ['required',],
            'initial_stock' => ['required', 'numeric'],
            'current_stock' => ['required', 'numeric'],
            'in_stock' => ['required', 'boolean'],
            'meta_title' => ['required', 'string', 'min:3'],
            'meta_keywords' => ['required', 'string', 'min:3'],
            'meta_description' => ['required', 'string', 'min:3'],
        ];

        if ($this->featured_image && !is_string($this->featured_image)) {
            $rules = array_merge($rules, [
                'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);
        }

        if ($this->image_1 && !is_string($this->image_1)) {
            $rules = array_merge($rules, [
                'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);
        }

        if ($this->image_2 && !is_string($this->image_2)) {
            $rules = array_merge($rules, [
                'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);
        }

        if ($this->image_3 && !is_string($this->image_3)) {
            $rules = array_merge($rules, [
                'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);
        }

        if ($this->image_4 && !is_string($this->image_4)) {
            $rules = array_merge($rules, [
                'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);
        }

        return $rules;
    }
}
