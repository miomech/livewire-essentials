<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class EditProfile extends Component
{

    public User $user;
    public string $username = '';
    public string $bio = '';

    public function mount(): void
    {
        $this->user = User::find(1);
        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function save():void
    {
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->save();
    }

    public function render(): View
    {
        return view('livewire.edit-profile');
    }
}
