<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PersonalInformation extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $headline;
    public $bio;

    protected $rules = [
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'headline' => 'nullable|string|max:255',
        'bio' => 'nullable|string',
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->firstName = $user->profile->first_name;
        $this->lastName = $user->profile->last_name;
        $this->email = $user->email;
        $this->phone = $user->profile->phone;
        $this->headline = $user->profile->headline;
        $this->bio = $user->profile->biography;
    }

    public function save()
    {
        $this->validate();

        $user = Auth::user();
        $user->profile->update([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'phone' => $this->phone,
            'headline' => $this->headline,
            'biography' => $this->bio,
        ]);

        $user->update([
            'email' => $this->email,
        ]);

        session()->flash('message', 'Personal information updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile.personal-information');
    }
}
