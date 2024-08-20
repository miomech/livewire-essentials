<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    // This method is called when the component is mounted
    // This is the equivalent of the created() method in Vue
    public function mount(): void
    {
        $this->todos = [
            'Go to the store',
            'Go to the market',
            'Go to work',
            'Go to the concert',
        ];
    }

    // This lifecycle hook is called when any property is updated
    public function updated($property, $value): void
    {
        // You could use an if else statement to check which property was updated
        if ($property === 'todo') {
            $this->$property = strtoupper($value);
        }
    }

    // Alternatively, you could use a updatedX method where X is the property name
//    public function updatedTodo($value): void
//    {
//        $this->todo = strtoupper($value);
//    }

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
