<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class BackgroundExperience extends Component
{
    use WithFileUploads;

    public $experiences;
    public $company_image;
    public $company_name;
    public $type;
    public $position;
    public $start_date;
    public $end_date;
    public $location;
    public $description;
    public $new_company_image;

    protected $rules = [
        'new_company_image' => 'nullable|image|max:1024', // 1MB Max
        'company_name' => 'required|string|max:255',
        'type' => 'required|in:education,work',
        'position' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'location' => 'required|string|max:255',
        'description' => 'nullable|string',
    ];

    public function mount()
    {
        $this->experiences = Auth::user()->profile->experiences;
    }

    public function updatedNewCompanyImage()
    {
        $this->validateOnly('new_company_image');
    }

    public function addExperience()
    {
        $this->validate();

        $companyImagePath = $this->new_company_image ? $this->new_company_image->store('company_images', 'public') : null;

        $experience = new Experience([
            'profile_id' => Auth::user()->profile->id,
            'company_image' => $companyImagePath,
            'company_name' => $this->company_name,
            'type' => $this->type,
            'position' => $this->position,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'location' => $this->location,
            'description' => $this->description,
        ]);

        $experience->save();

        $this->resetForm();
        $this->experiences = Auth::user()->profile->experiences;
        session()->flash('message', 'Experience added successfully.');

        $this->dispatch('experience-added');
    }

    public function deleteExperience($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        $this->experiences = Auth::user()->profile->experiences;
        session()->flash('message', 'Experience deleted successfully.');
    }

    private function resetForm()
    {
        $this->new_company_image = null;
        $this->company_name = '';
        $this->type = '';
        $this->position = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->location = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.profile.background-experience');
    }
}
