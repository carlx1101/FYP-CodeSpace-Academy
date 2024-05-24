<?php

namespace App\Models\Tutor;

use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'learning_objectives',
        'prerequisites',
        'target_audiences',
        'title',
        'subtitle',
        'description',
        'category_id',
        'subcategory_id',
        'cover_image',
        'promotional_video',
        'price',
        'is_free',
        'welcome_message',
        'completion_message',
        'primary_language',
        'publishing_status',
    ];

    protected $casts = [
        'learning_objectives' => 'array',
        'prerequisites' => 'array',
        'target_audiences' => 'array',
        'is_free' => 'boolean',
        'is_published' => 'boolean',  // New field
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function togglePublishingStatus()
    {
        $this->publishing_status = !$this->publishing_status;
        $this->save();
    }

}
