<?php

namespace App\Http\Livewire\Admin\ProductCategory;

use App\Http\hasDeletion;
use App\Http\hasSorting;
use App\Models\ProductCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;
    use hasSorting;
    use hasDeletion;

    public $category = null;
    public $search;
    public $name;
    public $description;

    public $success_message = '';

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.admin.product-category.category-list', [
            'categories' => $this->getProductCategories()
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function submitForm() {
        $data = $this->validate();
        $data['slug'] = Str::slug($data['name']);
        if(!$this->category) {
            ProductCategory::query()->create($data);
            $this->success_message = 'Product category created!';
        } else {
            $this->category->update($data);
            $this->success_message = 'Product category updated!';
            $this->category = null;
        }
        $this->displayModal = false;

    }

    public function showModal($id = null) {
        if($id) {
            $this->prefillValue($id);
        }
        $this->displayModal = true;
    }

    public function deleteCategory() {
        ProductCategory::find($this->deleteId)->delete();
        $this->success_message = 'Product category deleted!';
        $this->displayDeleteModal = false;

    }

    public function prefillValue($id) {
        $this->category = ProductCategory::find((int)$id);
        $this->name = $this->category->name;
        $this->description = $this->category->description;
    }

    public function getRules()
    {
        return $rules = [
            'name' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
        ];
    }

    private function getProductCategories()
    {
        return ProductCategory::query()
            ->where('name', 'like', '%'.$this->search.'%')
            ->when($this->sortByField, function ($query) {
                return $query->orderBy($this->sortByField, $this->sortByDirectionAsc ? 'asc' : 'desc');
            })
            ->latest()
            ->paginate(5);
    }
}
