<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'price',
        'stock',
    ];

    protected function casts(): array
    {
        return [
            'stock' => 'integer',
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}