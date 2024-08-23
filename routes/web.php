<?php

use App\Livewire\Counter;
use App\Livewire\EditProfile;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Using livewire full page components
Route::get('/todos', Todos::class);

Route::get('/counter', Counter::class);

Route::get('/show-posts', ShowPosts::class);

Route::get('/edit-profile', EditProfile::class);

