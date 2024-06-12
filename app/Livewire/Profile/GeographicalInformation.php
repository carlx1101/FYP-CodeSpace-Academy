<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GeographicalInformation extends Component
{
    public $addressOne;
    public $addressTwo;
    public $state;
    public $zipcode;
    public $country;

    protected $rules = [
        'addressOne' => 'required|string|max:255',
        'addressTwo' => 'nullable|string|max:255',
        'state' => 'required|string|max:255',
        'zipcode' => 'required|string|max:20',
        'country' => 'required|string|max:255',
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->addressOne = $user->profile->address_line_one;
        $this->addressTwo = $user->profile->address_line_two;
        $this->state = $user->profile->state;
        $this->zipcode = $user->profile->zipcode;
        $this->country = $user->profile->country;
    }

    public function save()
    {
        $this->validate();

        $user = Auth::user();
        $user->profile->update([
            'address_line_one' => $this->addressOne,
            'address_line_two' => $this->addressTwo,
            'state' => $this->state,
            'zipcode' => $this->zipcode,
            'country' => $this->country,
        ]);

        session()->flash('message', 'Geographical information updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile.geographical-information');
    }
}
