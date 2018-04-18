<?php

namespace App;

use App\Seller;
use App\Category;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    const PRODUCTO_DISPONIBLE = '1';
    const PRODUCTO_NO_DISPONIBLE = '0';
    
    protected $dates = ['deleted_at']; 

    protected $fillable =[
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    protected $hidden =[
        'pivot'
    ];

    function estaDisponible()
    {
        return $this->status == Product::PRODUCTO_DISPONIBLE;
    }

    function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
