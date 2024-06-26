<?php

namespace App\Models\Tutor;

use App\Models\Tutor\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_id', 'question'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
