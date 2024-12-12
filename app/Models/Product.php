<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'discount',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
// new
    public function productDetail()
{
    return $this->hasOne(ProductDetail::class);
}

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class,'product_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
