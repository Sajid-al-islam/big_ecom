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
        // $this->categories = Category::where('parent_id', 0)->select('id', 'name')->get();
        $this->categories = $this->make_category_tree_array();
        return view('livewire.components.header', [
            'search_products' => $this->search_products,
            'categories' => $this->categories,
        ]);
    }

    function buildCategories($children, $parent_id)
    {
        $result = array();
        foreach ($children as $row) {
            if ($row->parent_id == $parent_id) {
                if (Category::where('parent_id', $row->id)->where('status', 1)->exists()) {
                    $children = Category::where('parent_id', $row->id)->where("status", 1)->get();
                    $temp_category = [];
                    $temp_category['id'] = $row->id;
                    $temp_category['name'] = $row->name;
                    $temp_category['parent'] = $parent_id;
                    $temp_category['child'] = $this->buildCategories($children, $row->id);
                    $result[] = $temp_category;
                } else {
                    $temp_category['id'] = $row->id;
                    $temp_category['name'] = $row->name;
                    $temp_category['parent'] = $parent_id;
                    $temp_category['child'] = [];
                    $result[] = $temp_category;
                }
            }
        }
        return $result;
    }

    public function make_category_tree_array()
    {
        $categories = Category::where("status", 1)
            ->where('parent_id', 0)
            ->get();

        $all_category = [];

        foreach ($categories as $key => $item) {
            $module = $item->name . '_' . $item->id;
            if (Category::where('parent_id', $item->id)->where('status', 1)->exists()) {
                $children = Category::where('parent_id', $item->id)->where("status", 1)->get();
                $temp_category = [];
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['parent'] = null;
                $temp_category['child'] = $this->buildCategories($children, $item->id);
                $all_category[] = $temp_category;
            } else {
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['parent'] = null;
                $temp_category['child'] = [];
                $all_category[] = $temp_category;
            }
        }

        return $all_category;
    }
}
