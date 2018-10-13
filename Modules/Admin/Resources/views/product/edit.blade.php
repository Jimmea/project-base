@extends('admin::layouts.master')
@section('title', "Edit Product")
@section('content')
    <div class="row">
        <div class="col-md-12">
        <h4>Product #1</h4>
        <form action="" method="post">
            {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group " data-field="name">
                            <label for="product_name">Name</label>
                            <input type="text" name="name" placeholder="Tên sản phẩm" class="form-control">
                        </div>
                        <div class="form-group " data-field="description">
                            <label for="product_name">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group " data-field="price">
                            <label for="product_name">Price</label>
                            <input type="text" name="price" placeholder="Giá sản phẩm" class="form-control">
                        </div>

                        <div class="form-group " data-field="discounted price">
                            <label for="product_name">Discounted price</label>
                            <input type="text" name="discount" placeholder="Giá sản phẩm" class="form-control">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group" data-field="name">
                            <label for="product_name">Category</label>
                            <select class="form-control" name="category">
                                <option>Select category</option>
                            </select>
                        </div>

                        <div class="form-group" data-field="name">
                            <label for="product_name">Set display option for this product</label>
                            <select class="form-control" name="category">
                                <option>Select category</option>
                            </select>
                        </div>


                    </div>
                </div>
        </form>
        </div>
    </div>
@stop