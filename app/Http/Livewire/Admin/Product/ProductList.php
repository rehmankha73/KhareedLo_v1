<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $displayModal = false;
    public $displayDeleteModal = false;
    public $deleteId;
    public $sortByField;
    public $sortByDirectionAsc = true;
    public $category = null;
    public $search;
    public $name;
    public $description;

    public $success_message = '';

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.admin.product.product-list', [
            'products' => $this->getProducts(),
        ]);
    }


    private function getProducts(): LengthAwarePaginator
    {
        return Product::query()->with('product_category')->paginate(5);
    }
}
