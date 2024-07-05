<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employer\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CompanyLogoUpload extends Component
{
    use WithFileUploads;

    public $companyLogo;

    public function mount()
    {
        $company = Company::firstOrNew(['user_id' => Auth::id()]);
        $this->companyLogo = $company->company_logo;
    }

    public function updatedCompanyLogo()
    {
        $this->validate([
            'companyLogo' => 'image|max:1024', // 1MB Max
        ]);

        $company = Company::firstOrNew(['user_id' => Auth::id()]);
        if ($company->company_logo) {
            Storage::delete('public/company_logos/' . $company->company_logo);
        }

        $fileName = $this->companyLogo->store('company_logos', 'public');

        $company->update([
            'company_logo' => $fileName,
        ]);

        $this->companyLogo = $fileName;

        session()->flash('message', 'Company logo updated successfully.');
    }

    public function render()
    {
        return view('livewire.company-logo-upload');
    }
}
