<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'company_image',
        'company_name',
        'type',
        'position',
        'start_date',
        'end_date',
        'location',
        'description',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
