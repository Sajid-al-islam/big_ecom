<?php

namespace App\Http\Livewire\Test;

use App\Models\Product;
use Livewire\Component;

class TestPageShowModal extends Component
{
    public Product $product;
    public $ids;

    protected $listeners = ['load_modal'];

    public function mount()
    {
        $this->product = new Product();
    }

    public function dehydrate()
    {
        // dump('ok', $this);
        $this->render();
    }

    public function render()
    {
        return view('livewire.test.test-page-show-modal',[
            'product'=>$this->product
        ]);
    }

    public function load_modal($id)
    {
        $this->ids = $id;
        $this->product = Product::find($id);
    }
}
