<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'delivery_type',
        'delivery_price',
        'city',
        'street',
        'apartment',
        'paid',
        'url'
    ];

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'price')->withTimestamps();
    }

    public function getAmountAttribute() {
        $amount = 0;
        $products = $this->products;
        foreach ($products as $product) {
            $amount += $product->pivot->price;
        }
        return $amount;
    }

    public function getDeliveryTypeTextAttribute() {
        $deliveryType = $this->delivery_type;
        if ($deliveryType == 1) {
            return 'Самовывоз';
        }
        return 'Курьер';
    }
}
