<?php

namespace App\Models\Tutor;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'event_type',
        'start_date',
        'end_date',
        'location',
        'description',
        'host_id',
    ];


    public function host()
    {
        return $this->belongsTo(User::class, 'host_id');
    }

}
