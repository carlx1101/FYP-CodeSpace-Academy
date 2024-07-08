<?php

namespace App\Models\Employer;

use App\Models\Student\JobApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'location', 'type', 'mode', 'description', 'company_id'
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'job_listing_id');
    }

}
