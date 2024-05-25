<?php

namespace App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_id', 'content'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
