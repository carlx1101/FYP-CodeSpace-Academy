<?php

namespace App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'title', 'description', 'lesson_type', 'content','is_preview'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }


    public function video()
    {
        return $this->hasOne(Video::class);
    }


}
