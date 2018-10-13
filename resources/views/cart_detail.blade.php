@extends('layouts.main')
@section('content')
    <main>
        <section>
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <form action="" accept-charset="UTF-8" method="get">
                           <div class="input-group">
                               <input type="text" name="search" id="search" placeholder="Tìm kiếm sản phẩm" class="form-control">
                               <span class="input-group-btn">
                                    <input type="button" name="commit" value="Tìm " class="btn btn-primary" data-disable-with="Search">
                                 </span>
                           </div>
                       </form>
                   </div>
               </div>
               <div class="row mt-5">
                   <div class="col-md-12">
                       <h1>Product in your shopping cart</h1>
                       <form action="{{ route('post.cart.update_quantity') }}" method="post" target="_self">
                           {{ csrf_field() }}
                           <table class="table table-inverse">
                               <thead class="thead-inverse">
                               <tr>
                                   <th>Product Name</th>
                                   <th>Price</th>
                                   <th>Quantity</th>
                                   <th>SubTotal</th>
                                   <th>#</th>
                               </tr>
                               </thead>
                               <tbody>
                               @php
                                   $subTotal = 0;
                               @endphp
                               @foreach($carts as $key => $cart)
                                   @php
                                        $price = ($cart->product->discounted_price > 0) ? $cart->product->discounted_price : $cart->product->price;
                                   @endphp
                                   <tr>
                                       <input type="hidden" name="cart_id[]" value="{{ $cart->item_id }}">
                                       <td scope="row">{{ $cart->product->name }} ({{ $cart->attributes }})</td>
                                       <td>$ {{ $price }}</td>
                                       <td>
                                           <input type="text" name="quantity[]" value="{{ $cart->quantity }}">
                                       </td>
                                       <td>
                                           @php $subTotal += $price*($cart->quantity); @endphp
                                           $ {{ $price*($cart->quantity) }}
                                       </td>
                                       <td>
                                           <a href="{{ route('get.cart.product.buy', ['cart_id'=> $cart->item_id, 'later'=> 0]) }}">Save for later | </a>
                                           <a href="{{ route('get.cart.delete', ['cart_id'=> $cart->item_id]) }}">Remove</a>
                                       </td>
                                   </tr>
                               @endforeach
                               </tbody>
                               <tfoot>
                               <tr>
                                   <td colspan="4">Total amount: ${{ $subTotal }}</td>
                                   <td>
                                       <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                   </td>
                               </tr>
                               </tfoot>
                           </table>
                       </form>
                       <a href="{{ route('get.product.list') }}">Continue shopping</a>
                   </div>

                   @if($carts_saved->count())
                   <div class="col-md-12 mt-5">
                       <h5 class="font-weight-bold">Save products to buy later</h5>
                       <table class="table table-inverse">
                           <thead class="thead-inverse">
                               <tr>
                                   <th>Product Name</th>
                                   <th>Price</th>
                                   <th>#</th>
                               </tr>
                           </thead>
                           <tbody>
                                @foreach($carts_saved as $key => $cart)
                                    @php
                                        $price = $cart->product->discounted_price ? $cart->product->discounted_price : $cart->product->price;
                                    @endphp
                                   <tr>
                                       <td scope="row">{{ $cart->product->name }}</td>
                                       <td>$ {{ $price }}</td>
                                       <td>
                                           <a href="{{ route('get.cart.product.buy', ['cart_id'=> $cart->item_id, 'later'=> 1]) }}">Move to cart | </a>
                                           <a href="{{ route('get.cart.delete', ['cart_id'=> $cart->item_id]) }}">Remove</a>
                                       </td>
                                   </tr>
                                @endforeach
                           </tbody>
                       </table>
                   </div>
                   @endif

               </div>
           </div>
        </section>
    </main>
@stop