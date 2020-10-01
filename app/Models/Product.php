<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['product_category', 'name', 'description', 'unit_price', 'inventory',
        'payment_options', 'delivery_options', 'user_id', 'discount_start_date', 'discount_end_date', 'discount_percentage'];

    public function merchant()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
