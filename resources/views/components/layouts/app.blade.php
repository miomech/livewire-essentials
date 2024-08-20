<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<div>
    <a href="/">All</a>
    <a href="/todos">
        @if(request()->is('todos'))
            <strong>Todos</strong>
        @else
            Todos
        @endif
    </a>
    <a href="/counter">
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
