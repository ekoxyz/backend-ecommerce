<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'slug',
        'category_id',
        'user_id',
        'description',
        'weight',
        'price',
        'stock',
        'discount',
    ];

    /**
     * Model Realtionship
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
    /**
     * Accessor
     */
    public function getImageAttribute($image)
    {
        return asset('storage/products/' . $image);
    }
    public function getReviewsAvgRatingAttribute($value) {
        return $value ? substr($value, 0, 3) : 0;
    }
}
