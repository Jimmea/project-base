@extends('admin::layouts.master')
@section('title', "Edit order detail")
@section('content')
    <div class="row mb-3">
        <div class="col-md-5">
            <h4>Order #1 <small>[<a href="{{ route('orders.index') }}">Back to admin orders</a>]</small></h4>
            <form action="" class="form-horizontal">
                <table class="table">
                    <tbody>
                    <tr>
                        <td scope="row"><b>Total Amout: </b></td>
                        <td>$50.60</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Date created: </b></td>
                        <td>20/10/2018</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Date shipped: </b></td>
                        <td>20/10/2018</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Status: </b></td>
                        <td>20/10/2018</td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Comment: </b></td>
                        <td>
                            <input type="text" name="comment" class="form-control" placeholder="Type a comment">
                        </td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Customer Name: </b></td>
                        <td>
                            <input type="text" name="customer_name" class="form-control" placeholder="Type a customer">
                        </td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Shipping address: </b></td>
                        <td>
                            <input type="text" name="shipping_address" class="form-control" placeholder="Type a shipping address">
                        </td>
                    </tr>
                    <tr>
                        <td scope="row"><b>Customer email: </b></td>
                        <td>
                            <input type="text" name="email" class="form-control" placeholder="Type a customer email">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="" class="btn btn-sm">Update</a>
                            <a href="" class="btn btn-sm">Cancel</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-md-12 mt-3">
            <h4>Order contains these products</h4>
            <table class="table">
                <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Cost</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Iphone 5</td>
                        <td>1</td>
                        <td>$50</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Iphone 5</td>
                        <td>1</td>
                        <td>$50</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Iphone 5</td>
                        <td>1</td>
                        <td>$50</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Iphone 5</td>
                        <td>1</td>
                        <td>$50</td>
                        <td>$50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
