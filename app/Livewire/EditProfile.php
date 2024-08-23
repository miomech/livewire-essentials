<?php

namespace App\Livewire;

use App\Livewire\Forms\profileForm;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class EditProfile extends Component
{
    public profileForm $form;
    public bool $showSuccessIndicator = false;

    public function mount(): void
    {
        $this->form->setUser(User::find(1));
    }

    public function save(): void
    {
        $this->form->update();
        sleep(1);
        $this->showSuccessIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.edit-profile');
    }
}
