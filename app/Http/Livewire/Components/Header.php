<?php

namespace App\Http\Livewire\Components;

use App\Http\Controllers\CartController;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Header extends Component
{
    public $categories;
    public $searchQuery;
    protected $search_products=[];
    public $cart_count;

    public function search_product()
    {
        $query = Product::where('status', 1);
        $key = $this->searchQuery;
        if(strlen($key) > 0) {
            $query->where(function ($q) use ($key) {
                $q->Where('product_name', 'LIKE', '%' . $key . '%')
                ->orWhere('default_price', 'LIKE', '%' . $key . '%');
            })->select('id', 'default_price', 'product_name');
            $this->search_products = $query->paginate(10);
        }else {
            $this->search_products = null;
        }
    }

    public function submitSearchPage()
    {
        return redirect()->route('search_product', $this->searchQuery);
    }

    public function render()
    {
        $cart = new CartController;
        $this->cart_count = $cart->cart_count();
        $this->categories = Category::where('parent_id', 0)->select('id', 'name')->get();
        return view('livewire.components.header', [
            'search_products' => $this->search_products,
        ]);
    }
}
