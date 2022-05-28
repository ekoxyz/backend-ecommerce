<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'product_id',
        'qty',
        'price'
    ];

    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function order()
    {
        return $this->belongsTo(Product::class);
    }
}
