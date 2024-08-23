<tr @class(['bg-gray-200' => $post->archived_at])>>
    <td>{{$post->title}}</td>
    <td>{{$post->content}}</td>
    <td>{{$post->archived?->toFormattedDateString()}}</td>
    <td>
        @unless($post->archived_at)
            {{-- The archive action lives and is executed from the post-row component --}}
            {{-- If the action impacts the no other items within a parent component the action should be in the child component --}}
            <button
                type="button"
                wire:click="archive"
                wire:confirm="Are you sure you want to archive this post?"
            >Archive
            </button>
        @endunless
        {{-- The delete action lives and is executed from the parent component of post-row in this case 'showPosts' --}}
        {{-- If the action impacts the other items within a parent component the action should BE IN THE PARENT to force a re-render --}}
        <button
            type="button"
            wire:click="$parent.delete({{$post->id}})"
            wire:confirm="Are you sure you want to delete this post?"
        >Delete
        </button>
    </td>
</tr>

