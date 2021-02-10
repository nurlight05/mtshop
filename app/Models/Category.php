<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
    ];

    public static function getCategoryBySlug($slug) {
        $category = Category::where('slug', $slug)->first();
        return $category;
    }

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childs() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function attributes() {
        return $this->belongsToMany(Attribute::class);
    }

    public function products() {
        return $this->hasMany(Product::class)->where('quantity', '>', 0);
    }

    public function productsAll() {
        return $this->hasMany(Product::class);
    }
}
