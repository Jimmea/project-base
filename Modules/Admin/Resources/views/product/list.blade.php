@extends('admin::layouts.master')
@section('title', "List Product")
@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <form class="form-inline">
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="name" class="form-control" placeholder="[name]" aria-describedby="helpId">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                    <tr>
                        <th width="5%">#</th>
                        <th width="40%">Name</th>
                        <th width="20%">Description</th>
                        <th width="">Price</th>
                        <th width="">Discount price</th>
                        <th width="">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->discounted_price }}</td>
                            <td>
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $products->appends($quering)->render() }}
            </div>
        </div>
    </div>
@stop