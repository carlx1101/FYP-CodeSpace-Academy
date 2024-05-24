<?php

namespace App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;


    protected $fillable = ['lesson_id','video_url'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
