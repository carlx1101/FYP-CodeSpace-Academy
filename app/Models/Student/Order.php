<?php

namespace App\Models\Student;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'payment_method',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function getPurchasedCoursesByUser($userId)
    {
        return self::where('user_id', $userId)
            ->where('status', 'completed')
            ->with('orderItems.course')
            ->get()
            ->pluck('orderItems')
            ->flatten()
            ->pluck('course');
    }


}
