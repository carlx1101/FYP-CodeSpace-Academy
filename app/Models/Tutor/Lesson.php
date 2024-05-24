<?php

namespace App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'title', 'content'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }


    public function video()
    {
        return $this->hasOne(Video::class);
    }

    
}
