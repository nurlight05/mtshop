<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vcode',
        'category_id',
        'description',
        'price',
        'type',
        'discount',
        'quantity'
    ];

    public function attributes() {
        return $this->belongsToMany(Attribute::class)->withPivot('value')->withTimestamps();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function getTypeAttribute($value) {
        $type = null;
        if ($value == 1)
            $type = 'Новый';
        if ($value == 2)
            $type = 'Хит';
        if ($value == 3)
            $type = 'По акции';
        return $type;
    }

    public function getDiscountPriceAttribute() {
        $price = $this->price;
        $discount = $this->discount;
        return round($price * (100 - $discount) / 100);
    }

    public static function getProductBySlug($slug) {
        $product = Product::where('slug', $slug)->first();
        return $product;
    }
}
