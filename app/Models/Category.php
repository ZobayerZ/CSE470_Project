<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'created_by',
    ];

    /**
     * Relationship with the User model (creator of the category)
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

}
