<div>
    <h2>Create Post</h2>

    <div x-data="{count: 0}">
        <span x-text="count"></span>
        <button x-on:click="count++">+</button>
    </div>


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
            <small>Characters:<span x-text="$wire.content.length"></span></small>
            <small>Words:<span x-text="$wire.content.split(' ').length - 1"></span></small>
            @error('content')
            <em>{{$message}}</em>
            @enderror
        </label>

        <button type="submit">Create Post</button>
    </form>

    <p>Current Title <span x-text="$wire.title.toUpperCase()"></span></p>
    <button x-on:click="$wire.title = ''" >Clear</button>
    <button type="button" x-on:click="$wire.save()" >Save</button>
</div>
