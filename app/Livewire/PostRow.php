<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

// The mount method is used to pass data to the component when it is initialized
// If the parameter matches the name of the public property, it will be automatically injected
// Mount is optional and can be removed if not needed
//    public function mount(Post $post)
//    {
//        $this->post = $post;
//    }

    public function archive()
    {
        $this->post->archive();
    }

// Render method is used to render the component
// It is optional and can be removed if not needed (will use the default render method) and attempt to render the view with the same name as the component
//    public function render()
//    {
//        return view('livewire.post-row');
//    }
}
