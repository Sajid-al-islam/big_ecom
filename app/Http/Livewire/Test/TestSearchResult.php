<?php

namespace App\Http\Livewire\Test;

use App\Models\Product;
use Livewire\Component;

class TestSearchResult extends Component
{
    public $search_key = '';
    public function mount()
    {
        if(request()->has('key')){
            session()->put('key', request()->get('key'));
            $this->search_key = request()->get('key');
        }else{
            $this->search_key = session()->get('key');
        }
    }
    public function render()
    {
        $products = Product::where('product_name','LIKE','%'.$this->search_key.'%')->latest()->take(10)->paginate(10);
        return view('livewire.test.test-search-result',[
                'products' => $products,
            ])->extends('frontend.layout');
    }
}
