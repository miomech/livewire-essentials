<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    #[Test]
    public function can_create_a_new_post()
    {
        $post = Post::where('title', 'New Post')->first();
        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'New Post')
            ->set('content', 'This is a new post')
            ->call('save');

        $post = Post::where('title', 'New Post')->first();
        $this->assertNotNull($post);

        $this->assertEquals('New Post', $post->title);
        $this->assertEquals('This is a new post', $post->content);
    }

    #[Test]
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->set('content', 'This is a new post')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }
}
