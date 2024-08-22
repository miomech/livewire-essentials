<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    // This is a custom attribute that will be used to display the field name in the error message
    #[Rule('required', as: 'Post Title')]
    // Custom attributes can be stacked, and the message can also be customized
    #[Rule('min:4', message: 'The :attribute field must be at least :min characters')]
    public $title = '';
    #[Rule('required', as: 'Post Content')]
    public $content = '';

    public function save()
    {
        // Validate the input using the rules defined in the title and content property attributes
        $this->validate();

        // Alternatively validation can be done here
        // $this->validate([
        //  'title' => 'required',
        //   'content' => 'required'
        // ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        $this->redirect('/show-posts', navigate: true);

    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
