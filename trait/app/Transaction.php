<?php

namespace App;

use App\Buyer;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id'
    ];

    function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
