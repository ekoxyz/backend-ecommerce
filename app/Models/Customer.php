<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at',
    ];

    /**
     * Model Realtionship
     */
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Accessor
     */
    public function getCreatedAtAttribute($date)
    {
        // return date('d-m-Y', strtotime($value));
        $value = Carbon::parse($date);
        $parse = $value->locale('id');
        return $parse->translatedFormat('l, d F Y');
    }

}
