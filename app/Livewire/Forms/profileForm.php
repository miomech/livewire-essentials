<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class profileForm extends Form
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

    public function rules(): array
    {
        return [
            'username' => ['required', Rule::unique('users')->ignore($this->user->id)],
        ];
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function update(): void
    {
        $this->validate();
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->save();
    }
}