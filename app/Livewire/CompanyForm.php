<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Employer\Company;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CompanyForm extends Component
{
    public $name;
    public $industry;
    public $founded;
    public $size;
    public $description;
    public $website;
    public $location;

    protected $rules = [
        'name' => 'required|string|max:255',
        'industry' => 'required|string|max:255',
        'founded' => 'nullable|date',
        'size' => 'required|string|max:255',
        'description' => 'nullable|string',
        'website' => 'nullable|url',
        'location' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        $company = Company::firstOrNew(['user_id' => Auth::id()]);

        $this->name = $company->name;
        $this->industry = $company->industry;
        $this->founded = $company->founded ? Carbon::parse($company->founded)->format('Y-m-d') : null;
        $this->size = $company->size;
        $this->description = $company->description;
        $this->website = $company->website;
        $this->location = $company->location;
    }

    public function save()
    {
        $this->validate();

        $company = Company::firstOrNew(['user_id' => Auth::id()]);
        $company->fill([
            'name' => $this->name,
            'industry' => $this->industry,
            'founded' => $this->founded ? Carbon::parse($this->founded)->format('Y-m-d') : null,
            'size' => $this->size,
            'description' => $this->description,
            'website' => $this->website,
            'location' => $this->location,
        ]);
        $company->save();

        session()->flash('message', 'Company information updated successfully.');
    }

    public function render()
    {
        return view('livewire.company-form');
    }
}
