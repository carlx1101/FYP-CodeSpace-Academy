<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'headline',
        'biography',
        'phone',
        'cover_banner',
        'country',
        'address_line_one',
        'address_line_two',
        'state',
        'zipcode',
        'fb_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
        'instagram_link',
        'website_link',
        'timezone',
        'primary_language',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
