<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DeleteAccount extends Component
{
    public $confirmDeletion = false;

    public function deleteAccount()
    {
        if ($this->confirmDeletion) {
            $user = Auth::user();
            Auth::logout();

            // Delete the user's data
            $user->delete();

            // Redirect to the homepage or login page
            return redirect()->route('home')->with('message', 'Your account has been deleted.');
        } else {
            session()->flash('error', 'You must confirm the deletion by checking the checkbox.');
        }
    }

    public function render()
    {
        return view('livewire.profile.delete-account');
    }
}
