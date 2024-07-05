<?php

namespace App\Models\Employer;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'name', 'description', 'company_logo', 'founded', 'industry', 'size', 'website', 'location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobListings()
    {
        return $this->hasMany(JobListing::class);
    }
}
