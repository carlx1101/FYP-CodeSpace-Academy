<?php

namespace App\Models\Employer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
