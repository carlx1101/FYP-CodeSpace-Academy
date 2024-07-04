<?php

namespace App\Models\Student;

use App\Models\User;
use App\Models\Tutor\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discussion extends Model
{
    use HasFactory;


    protected $fillable = ['lesson_id', 'user_id', 'title', 'message'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
