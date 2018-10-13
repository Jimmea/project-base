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
                <div class="row mt-2 mb-2">
                    <div class="col-md-12">
                        <a href="{{ route('get.cart.list') }}"> View Cart</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $product->name }}</h1>
                        <p>{{ $product->description }}</p>
                        <p>Price : <del>{{ $product->discounted_price }}</del> {{ $product->price }}</p>
                        <div>
                            Color:
                            Size:
                        </div>
                        <div>
                            <a href="" class="btn btn-info">Add to Cart</a>
                            <a href="" class="btn btn-success">Edit Product Detail</a>
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('get.product.list') }}"><u>Continue shopping</u></a>
                        </div>
                        <div class="mt-4">
                            <h4 class="font-weight-bold">Find similar products in our Catalog</h4>
                            <p>
                                Regional >> Italia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop