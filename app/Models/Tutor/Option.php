<?php

namespace App\Models\Tutor;

use App\Models\Tutor\Assessment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['assessment_id', 'option_text', 'is_correct'];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }
}
