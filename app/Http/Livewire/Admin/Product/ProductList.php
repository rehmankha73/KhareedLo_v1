<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $displayDeleteModal = false;
    public $deleteId;
    public $sortByField;
    public $sortByDirectionAsc = true;
    public $category = null;
    public $search;
    public $name;
    public $description;


    protected $queryString = ['search'];


    public function render()
    {
        return view('livewire.admin.product.product-list', [
            'products' => $this->getProducts(),
        ]);
    }


    private function getProducts(): LengthAwarePaginator
    {
        return Product::query()->with('product_category')->latest()->paginate(5);
    }

    public function showDeleteModal($id = null) {
        if($id) {
            $this->deleteId = (int)$id;
        }
        $this->displayDeleteModal= true;
    }

    public function deleteProduct() {
        Product::find($this->deleteId)->delete();
        session()->flash('success_message', 'Product deleted successfully!');
        $this->displayDeleteModal = false;

    }
}
