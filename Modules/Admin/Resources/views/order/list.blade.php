@extends('admin::layouts.master')
@section('title', "List Order")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12 mb-3">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" name="range_date" class="form-control" placeholder="Date range">
                </div>
                <div class="form-group ml-1">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table table-inverse table-bordered">
                <thead class="thead-inverse">
                    <tr>
                        <th width="5%">ORDER_ID</th>
                        <th>DATE CREATED</th>
                        <th>DATE SHIPPED</th>
                        <th>STATUS</th>
                        <th>CUSTOMER</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>
                            <a href="{{ route('orders_detail.index') }}"><u>View Details</u></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>
                            <a href="{{ route('orders_detail.index') }}"><u>View Details</u></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>
                            <a href="{{ route('orders_detail.index') }}"><u>View Details</u></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>
                            <a href="{{ route('orders_detail.index') }}"><u>View Details</u></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop