<?php

namespace App\Http\Livewire\Admin\Product;

use App\Http\hasDeletion;
use App\Http\hasSorting;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;
    use hasSorting;
    use hasDeletion;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.admin.product.product-list', [
            'products' => $this->getProducts(),
        ]);
    }


    private function getProducts(): LengthAwarePaginator
    {
        return Product::query()->with('product_category')
            ->where('id', 'like', '%'.$this->search.'%')
            ->orWhere('product_code', 'like', '%'.$this->search.'%')
            ->orWhere('name', 'like', '%'.$this->search.'%')
            ->orWhere('unit_price', 'like', '%'.$this->search.'%')
            ->orWhere('current_stock', 'like', '%'.$this->search.'%')
            ->orWhereHas('product_category', function (Builder $query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortByField, function ($query) {
                return $query->orderBy($this->sortByField, $this->sortByDirectionAsc ? 'asc' : 'desc');
            })
            ->latest()->paginate(5);
    }

    public function deleteProduct(): void
    {
        Product::query()->find((int)$this->deleteId)->delete();
        session()->flash('success_message', 'Product deleted successfully!');
        $this->displayDeleteModal = false;

    }
}
