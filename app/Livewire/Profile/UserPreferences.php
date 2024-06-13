<?php

namespace App\Livewire\Profile;

use Log;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserPreferences extends Component
{
    public $primary_language;
    public $timezone;

    public function mount()
    {
        $this->loadUserPreferences();
    }

    protected $rules = [
        'primary_language' => 'required|string',
        'timezone' => 'required|string',
    ];

    public function savePreferences()
    {
        $this->validate();

        $user = Auth::user();
        $user->profile->update([
            'primary_language' => $this->primary_language,
            'timezone' => $this->timezone,
        ]);

        // Reload the user preferences after updating
        $this->loadUserPreferences();

        session()->flash('message', 'Preferences updated successfully.');

        // Log the updated values
        \Log::info('Preferences updated:', [
            'primary_language' => $this->primary_language,
            'timezone' => $this->timezone,
        ]);
    }

    protected function loadUserPreferences()
    {
        $user = Auth::user();
        $this->primary_language = $user->profile->primary_language ?? '';
        $this->timezone = $user->profile->timezone ?? '';

        // Log the loaded values
        Log::info('Preferences loaded:', [
            'primary_language' => $this->primary_language,
            'timezone' => $this->timezone,
        ]);
    }

    public function render()
    {
        return view('livewire.profile.user-preferences');
    }
}
