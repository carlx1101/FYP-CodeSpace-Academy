<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class CoverBanner extends Component
{
    use WithFileUploads;

    public $coverBanner;

    public function mount()
    {
        $user = Auth::user();
        $this->coverBanner = $user->profile->cover_banner;
    }

    public function updatedCoverBanner()
    {
        $this->validate([
            'coverBanner' => 'image|max:1024', // 1MB Max
        ]);

        $user = Auth::user();
        if ($user->profile->cover_banner) {
            Storage::delete('public/covers_banner/' . $user->profile->cover_banner);
        }

        $fileName = $this->coverBanner->store('covers_banner', 'public');

        $user->profile->update([
            'cover_banner' => $fileName,
        ]);

        $this->coverBanner = $fileName;

        session()->flash('message', 'Cover banner updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile.cover-banner');
    }
}
