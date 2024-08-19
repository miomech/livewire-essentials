<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function render()
    {
        return view('livewire.counter');
    }

    // ALL ACTION PARAMS MUST BE VALIDATED!


    // DO NOT TRUST ACTION PARAMS
    // TREAT THEM AS USER INPUT!!!

    // Users can simply modify the html and send any value they want
    public function increment($by)
    {
        $this->count += $by;
    }

    // ALL PUBLIC METHODS ARE ACTIONS
    // This function, although it is not used in the component, can be called by the user
    // by simply modifying the html
    public function decrement($by)
    {
        $this->count -= $by;
    }
}
