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

    protected $appends = array('discount_price');

    // Related models
    public function attributes() {
        return $this->belongsToMany(Attribute::class)->withPivot('value')->withTimestamps();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    // Mutators
    public function getTypeNameAttribute() {
        $type = null;
        if ($this->type == 1)
            $type = 'Новый';
        if ($this->type == 2)
            $type = 'Хит';
        if ($this->type == 3)
            $type = 'По акции';
        return $type;
    }

    public function getDiscountPriceAttribute() {
        $price = $this->price;
        $discount = $this->discount;
        return round($price * (100 - $discount) / 100);
    }

    // Methods
    public static function getProductBySlug($slug) {
        $product = Product::where('slug', $slug)->first();
        return $product;
    }

    public static function getActiveProducts() {
        $products = Product::where('quantity', '>', 0)->get();
        return $products;
    }
}
