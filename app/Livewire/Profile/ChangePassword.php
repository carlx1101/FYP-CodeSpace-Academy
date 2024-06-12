<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmNewPassword;

    protected $rules = [
        'currentPassword' => 'required',
        'newPassword' => 'required|min:8|same:confirmNewPassword',
        'confirmNewPassword' => 'required',
    ];

    public function updatePassword()
    {
        $this->validate();

        $user = Auth::user();

        if (!Hash::check($this->currentPassword, $user->password)) {
            session()->flash('error', 'The current password is incorrect.');
            return;
        }

        $user->update([
            'password' => Hash::make($this->newPassword),
        ]);

        Auth::logout();

        return redirect()->route('home')->with('message', 'Password updated successfully. Please log in with your new password.');
    }

    public function render()
    {
        return view('livewire.profile.change-password');
    }
}
