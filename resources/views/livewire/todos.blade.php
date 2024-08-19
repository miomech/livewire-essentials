<div>

    <form wire:submit="add()">
        <input type="text" wire:model.live="todo">
        <div>current todo as it is on the backend {{$todo}}</div>
        <p>by default wire:model is not live to save on network requests, you just use 'wire:model.live' explicitly</p>
        <button type="submit">Add</button>
    </form>
    @foreach($todos as $todo)
        <li>{{$todo}}</li>
    @endforeach
</div>
