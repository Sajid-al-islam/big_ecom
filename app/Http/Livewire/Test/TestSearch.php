<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class TestSearch extends Component
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
        return view('livewire.test.test-search');
    }

    public function gotoResult()
    {
        return redirect()->to('/search?key='.$this->search_key);
    }
}
