<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpdateEmail extends Component
{
    public $newEmail;

    protected $rules = [
        'newEmail' => 'required|email|unique:users,email',
    ];

    public function updateEmail()
    {
        $this->validate();

        $user = Auth::user();
        $user->update(['email' => $this->newEmail]);

        // Log the user out
        Auth::logout();

        // Redirect to the home page
        return redirect()->route('home')->with('message', 'Email updated successfully. Please log in with your new email.');
    }

    public function render()
    {
        return view('livewire.profile.update-email');
    }
}
