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
        'image',
    ];

    /**
     * Model Realtionship
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Accessor
     */
    public function getImageAttribute($value)
    {
        return asset('storage/categories' . $value);
    }

}
