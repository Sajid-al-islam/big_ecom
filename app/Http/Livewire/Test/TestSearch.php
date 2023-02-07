<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class TestSearch extends Component
{
    public $search_key = '';

    public function render()
    {
        return view('livewire.test.test-search');
    }

    public function gotoResult()
    {
        return redirect()->to('/search?key='.$this->search_key);
    }
}
