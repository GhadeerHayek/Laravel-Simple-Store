<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Product(){
        return $this->hasMany(Product::class);
    }
    public function Transaction(){
        return $this->hasOne(Transaction::class);
    }
}
