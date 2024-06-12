<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SocialAccounts extends Component
{
    public $socialAccounts = [
        'twitter' => '',
        'facebook' => '',
        'linkedin' => '',
        'youtube' => '',
        'instagram' => '',
        'browser-chrome' => '',
    ];

    public $editMode = [
        'twitter' => false,
        'facebook' => false,
        'linkedin' => false,
        'youtube' => false,
        'instagram' => false,
        'browser-chrome' => false,
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->socialAccounts = [
            'twitter' => $user->profile->twitter_link,
            'facebook' => $user->profile->fb_link,
            'linkedin' => $user->profile->linkedin_link,
            'youtube' => $user->profile->youtube_link,
            'instagram' => $user->profile->instagram_link,
            'browser-chrome' => $user->profile->website_link,
        ];
    }

    public function toggleEdit($account)
    {
        $this->editMode[$account] = !$this->editMode[$account];
    }

    public function save($account)
    {
        $user = Auth::user();
        $user->profile->update([
            $account . '_link' => $this->socialAccounts[$account],
        ]);

        $this->editMode[$account] = false;

        session()->flash('message', ucfirst($account) . ' link updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile.social-accounts');
    }
}
