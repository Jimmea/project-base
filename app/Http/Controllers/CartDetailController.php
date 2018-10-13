<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/13/18
 * Time: 10:53 PM
 */

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function __construct()
    {
    }

    public function getCart(Request $request)
    {
        $viewData =[
            'carts' => ShoppingCart::getCartProduct(),
            'carts_saved' => ShoppingCart::getCartProduct(ShoppingCart::BUY_LATER)
        ];

        return view('cart_detail')->with($viewData);
    }

    public function postCartProduct(Request $request)
    {
        $product_id = $request->get('product_id');

        $selected_attributes = array ();
        $selected_attribute_values = array ();
        // Get selected product attributes if any
        foreach ($_POST as $key => $value)
        {
            // If there are fields starting with "attr_" in the POST array
            if (substr($key, 0, 5) == 'attr_')
            {
                // Get the selected attribute name and value
                $selected_attributes[] = substr($key, strlen('attr_'));
                $selected_attribute_values[] = $_POST[$key];
            }
        }

        $attributes = '';
        if (count($selected_attributes) > 0)
            $attributes = implode('/', $selected_attributes) . ': ' .
                implode('/', $selected_attribute_values);

        ShoppingCart::addProduct($product_id, $attributes);

        return redirect()->back();
    }


    public function deleteCartProduct(Request $request)
    {
        ShoppingCart::removeCartProduct($request->cart_id);
        return redirect()->back();
    }

    public function updateCartQtyProduct(Request $request)
    {
        $cart_id_arr = $request->get('cart_id', []);
        $qty_arr     = $request->get('quantity', []);
        if ($cart_id_arr)
        {
            foreach ($cart_id_arr as $key => $item)
            {
                $qty = array_get($qty_arr, $key);
                $qty = $qty ?? 1;
                ShoppingCart::updateCartQty($item, $qty);
            }
        }

        return redirect()->back();
    }

    public function saveProductNowOrLater(Request $request)
    {
        $cart_id  = $request->get('cart_id');
        $later    = $request->get('later');
        $later    = $later ? 1 : 0;

        ShoppingCart::saveCartProductForLaterOrNow($cart_id, $later);

        return redirect()->back();
    }
}