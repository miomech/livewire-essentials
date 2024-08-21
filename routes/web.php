<?php

use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Using livewire full page components
Route::get('/todos', Todos::class);

Route::get('/counter', Counter::class);

Route::get('/showPosts', ShowPosts::class);

