<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    public $categorySearch;
    public $statusSearch = "0";
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $categories = Category::all();
        $products = Product::latest('id')
                        ->where('name','LIKE','%' . $this->search . '%')
                        ->where('category_id', 'LIKE','%' . $this->categorySearch . '%')
                        ->where('status', 'LIKE','%' . $this->statusSearch . '%' )
                        ->paginate(10);
        return view('livewire.admin.product-index', compact('products','categories'));
    }
}
