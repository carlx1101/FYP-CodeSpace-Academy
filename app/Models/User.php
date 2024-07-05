<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Review;
use App\Models\Student\Cart;
use App\Models\Tutor\Course;
use App\Models\Tutor\Lesson;
use App\Models\Student\Order;
use Laravel\Jetstream\HasTeams;
use App\Models\Employer\Company;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Student\Enrollment;
use App\Models\Student\JobApplication;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profile_photo_path',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected function role(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["student", "tutor", "admin", "employer"][$value],
        );
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id');
    }

    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'student_id', 'course_id')
                    ->withTimestamps();
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function completedLessons()
    {
        return $this->belongsToMany(Lesson::class, 'completed_lessons')
            ->withTimestamps()
            ->withPivot(['user_id', 'lesson_id']);
    }

    public function courseProgress(Course $course)
    {
        $totalLessons = $course->lessons()->count();
        $completedLessons = $this->completedLessons()->whereIn('lesson_id', $course->lessons()->pluck('id'))->count();

        if ($totalLessons == 0) {
            return 0;
        }

        return ($completedLessons / $totalLessons) * 100;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

}
