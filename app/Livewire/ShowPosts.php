<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    // the following delete method will receive a postId as a parameter
    //    public function delete($postId)
    //    {
    //        // We can use the Post model to find the post with the given id
    //        Post::find($postId)->delete();
    //    }

    // Alternatively, we can use the following code to delete a post
    // Laravel will take care of route model binding and will automatically find the post with the given id
    public function delete(Post $post)
    {
        $post->delete();
    }


    public function render()
    {
        // Rather then creating a public property, we can pass data to the
        // view by using the second parameter of the view() function

        // This is preferred since the posts are always updated with the latest data
        return view('livewire.show-posts', [
            'posts' => Post::all()
        ]);
    }
}
