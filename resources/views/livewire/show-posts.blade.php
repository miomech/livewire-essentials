<div>
    <livewire:create-post/>
    <h2>Posts:</h2>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Archived At</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <livewire:post-row wire:key="{{$post->id}}" :post="$post"/>
        @endforeach
    </table>
</div>
