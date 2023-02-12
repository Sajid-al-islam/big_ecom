<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Invoice extends Component
{
    public function render()
    {
        return view('livewire.invoice')->extends('layouts.app', [
            'meta' => [
                "title" => "Download invoice" . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);
    }
}
