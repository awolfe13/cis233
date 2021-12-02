<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Musicians extends Component
{
    public function render()
    {
        $musicians = \App\Musician::all();
        return view('livewire.musicians', ['musicians' => $musicians]);
    }
}