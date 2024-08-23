<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{

    public User $user;

    // The 'required' rule is applied to the username property
    // The 'unique' rule is applied to the username property, and the 'users' table is specified as the table to check for uniqueness
    // The issue is php attributes only support strings and we need to use the 'unique' rule with the 'users' table while ignoring the current user
    // Attribute validators are best suited for simple validation rules
    //    #[Validate('required|unique:users')]

    // By using the Validate attribute
    // The validation rules are applied to the username property on each request
    #[Validate]
    public string $username = '';
    public string $bio = '';

    public bool $showSuccessIndicator = false;

    public function rules(): array
    {
        return [
            'username' => ['required', Rule::unique('users')->ignore($this->user->id)],
        ];
    }

    public function mount(): void
    {
        $this->user = User::find(1);
        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function save(): void
    {
        $this->validate();
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->save();

        sleep(1);

        $this->showSuccessIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.edit-profile');
    }
}
