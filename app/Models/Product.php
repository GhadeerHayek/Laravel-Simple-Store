<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Store(){
        return $this->belongsTo(Store::class);
    }
    public function Transaction(){
        return $this->hasOne(Transaction::class);
    }
}
