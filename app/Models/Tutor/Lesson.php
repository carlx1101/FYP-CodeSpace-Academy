<?php

namespace App\Models\Tutor;

use App\Models\User;
use App\Models\Student\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'title', 'description', 'lesson_type', 'content','is_preview','knowledge'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }


    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function article()
    {
        return $this->hasOne(Article::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function completedBy()
    {
        return $this->belongsToMany(User::class, 'completed_lessons')
            ->withTimestamps()
            ->withPivot(['user_id', 'lesson_id']);
    }


}
