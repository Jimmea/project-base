<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/13/18
 * Time: 10:53 PM
 */

namespace Modules\shop\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Shop\Entities\Order;
use Modules\Shop\Entities\OrderDetail;
use Modules\Shop\Entities\ShoppingCart;
use Carbon\Carbon;
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

    public function postCartExecute(Request $request)
    {
        $buttonSubmit = $request->get('btn_submit');
        if ($buttonSubmit == 'Updated')
        {
            // Update qty
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
        }
        else
        {
            // Set cart empty
            $data = [ 'created_on' => Carbon::now()];
            $order = Order::createOrder($data);

            $order_id = $order->order_id;
            if ($order_id)
            {
                $total_amount = 0;
                $carts = ShoppingCart::getCartProduct();
                foreach ($carts as $item)
                {
                    if ($product = $item->product)
                    {
                        $unit_cost = $product->discounted_price > 0 ? $product->discounted_price : $product->price;
                        OrderDetail::create([
                            'order_id'=> $order_id,
                            'product_id'=> $item->product_id,
                            'product_name' => $item->product->name,
                            'attributes' => $item->attributes,
                            'quantity' => $item->quantity,
                            'unit_cost' => $unit_cost
                        ]);

                        $total_amount += ($unit_cost*$item->quantity);
                    }
                }
            }

            // Update
            Order::where('order_id', $order_id)->update([
                'total_amount'=>  $total_amount,
            ]);

            // Set cart empty
            ShoppingCart::setCartEmpty();
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