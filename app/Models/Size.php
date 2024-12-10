<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
