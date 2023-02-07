<?php

namespace App\Http\Livewire\Test;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\Component;

class TestPage1innerButton extends Component
{
    protected $products = [];

    public function render()
    {
        $this->products = Product::latest()->take(10)->paginate(10);
        return view('livewire.test.test-page1inner-button',[
            'products' => $this->products,
        ]);
    }


}
