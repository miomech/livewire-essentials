<div>
    <h2>Create Post</h2>
    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title')
            <em>{{$message}}</em>
            @enderror
        </label>
        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            @error('content')
            <em>{{$message}}</em>
            @enderror
        </label>

        <button type="submit">Create Post</button>
    </form>
</div>
