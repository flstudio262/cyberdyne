<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function orders(): belongsToMany{
        return $this->belongsToMany(Order::class)
            ->withPivot('total_quantity', 'total_price');
    }
}