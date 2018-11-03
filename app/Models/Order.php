<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = ['total_amount', 'created_on'];
    public $timestamps = false;

    //
    public $status_text = [
        'placed', // This is the initial status of an order after the Place Order button is clicked in the shopping cart.
        'verified', // The administrator marks the order as verified after the payment was confirmed
        'completed', // The administrator marks the order as completed after the products have been shipped. At the same time, the shipped_on field is also populated
        'canceled' // the administrator marks the order as canceled if the order has been placed (by clicking the Place Order button) but the payment wasn’t processed, or in other scenarios that require canceling the order.
    ];

    public static function createOrder($data)
    {
        return self::create($data);
    }


}
