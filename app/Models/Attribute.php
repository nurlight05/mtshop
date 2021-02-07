<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'measure_id',
    ];

    public function measure() {
        return $this->belongsTo(Measure::class);
    }

    public function getNameAttribute($value) {
        return Str::ucfirst($value);
    }
}
