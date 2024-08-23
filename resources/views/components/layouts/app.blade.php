<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>
    <a wire:navigate href="/">All</a>
    <a wire:navigate href="/todos">
        @if(request()->is('todos'))
            <strong>Todos</strong>
        @else
            Todos
        @endif
    </a>
    <a wire:navigate href="/counter">
        @if(request()->is('counter'))
            <strong>Counter</strong>
        @else
            Counter
        @endif
    </a>
</div>
{{ $slot }}
</body>
</html>
