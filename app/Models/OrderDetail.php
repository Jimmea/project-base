<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = ['order_id', 'product_id', 'attributes', 'product_name', 'quantity', 'unit_cost'];
    public $timestamps = false;
}
