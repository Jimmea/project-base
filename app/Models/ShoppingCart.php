<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Model
{
    public $table = 'shopping_cart';

    public $fillable = ['cart_id', 'product_id', 'attributes', 'quantity', 'buy_now', 'added_on'];

    protected $primaryKey ='item_id';
    public $timestamps = false;

    const BUY_NOW = 1;
    const BUY_LATER = 0;

    // Stores the visitor's Cart ID
    private static $_mCartId;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public static function setCartId()
    {
        if (self::$_mCartId == '')
        {
            // If the visitor's cart ID is in the session, get it from there
            if (isset ($_SESSION['cart_id']))
            {
                self::$_mCartId = $_SESSION['cart_id'];
            }
            // If not, check whether the cart ID was saved as a cookie
            elseif (isset ($_COOKIE['cart_id']))
            {
                // Save the cart ID from the cookie
                self::$_mCartId = $_COOKIE['cart_id'];
                $_SESSION['cart_id'] = self::$_mCartId;
                // Regenerate cookie to be valid for 7 days (604800 seconds)
                setcookie('cart_id', self::$_mCartId, time() + 604800);
            }else
            {
                /* Generate cart id and save it to the $_mCartId class member,
                the session and a cookie (on subsequent requests $_mCartId
                will be populated from the session) */
                self::$_mCartId = md5(uniqid(rand(), true));
                // Store cart id in session
                $_SESSION['cart_id'] = self::$_mCartId;

                // Cookie will be valid for 7 days (604800 seconds)
                setcookie('cart_id', self::$_mCartId, time() + 604800);
            }
        }
    }

    // Returns the current visitor's card id
    public static function getCartId()
    {
        // Ensure we have a cart id for the current visitor
        if (!isset (self::$_mCartId))
            self::setCartId();

        return self::$_mCartId;
    }

    public static function addProduct($product_id, $attributes)
    {
        $params = [
            'cart_id'    => self::getCartId(),
            'product_id' => $product_id,
            'attributes' => $attributes
        ];
        self::updateOrCreate($params, $params)->increment('quantity');

    }

    public static function removeCartProduct($cart_id)
    {
        self::where('item_id', $cart_id)
            ->where('cart_id', self::getCartId())
            ->delete();
    }

    public static function updateCartQty($cart_id, $qty)
    {
        self::where('item_id', $cart_id)
            ->where('cart_id', self::getCartId())
            ->update([
               'quantity' => $qty
            ]);
    }

    /**
     * COALESCE can receive any number of parameters, and it returns the first one that is not NULL
     * NULLIF receives two parameters and returns NULL|FALSE
     *
     * @return ShoppingCart[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getCartProduct($buyNow = 1)
    {
        $mShoppingCart = self::with('product')
                        ->where('cart_id', self::getCartId())
                        ->where('buy_now', $buyNow)
                        ->orderBy('item_id', 'DESC')
                        ->get();

        return $mShoppingCart;
    }

    public function getCartTotalAmount($cartId)
    {

    }

    public static function saveCartProductForLaterOrNow($cart_id, $later = 0)
    {
        self::where('item_id', $cart_id)
        ->where('cart_id', self::getCartId())
        ->update([
           'buy_now' => $later
        ]);

    }
}
