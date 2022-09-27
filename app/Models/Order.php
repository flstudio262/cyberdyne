<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products(): belongsToMany{
        return $this->belongsToMany(Product::class)
            ->withPivot('total_quantity', 'total_price');
    }
}