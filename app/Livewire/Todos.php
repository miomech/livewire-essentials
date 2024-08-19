<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert',
    ];

    public function add()
    {
        // Add the new item to the list of todos
        $this->todos[] = $this->todo;

        // Clear the input field
        $this->todo = '';
        // You can also use the following code to clear the input field
        $this->reset('todo');
    }


    public function render()
    {
        return view('livewire.todos');
    }
}
