<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AvatarUpload extends Component
{
    use WithFileUploads;

    public $avatar;

    public function mount()
    {
        $user = Auth::user();
        $this->avatar = $user->profile_photo_path;
    }

    public function updatedAvatar()
    {
        $this->validate([
            'avatar' => 'image|max:1024', // 1MB Max
        ]);

        $user = Auth::user();
        if ($user->profile_photo_path) {
            Storage::delete('public/avatars/' . $user->profile_photo_path);
        }

        $fileName = $this->avatar->store('avatars', 'public');

        $user->update([
            'profile_photo_path' => $fileName,
        ]);

        $this->avatar = $fileName;

        session()->flash('message', 'Avatar updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile.avatar-upload');
    }
}
