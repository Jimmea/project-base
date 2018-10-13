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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Choose a Department
                            </div>
                            <div class="card-block">
                                <ul class="list-group list-group-flush">
                                    @foreach($departments as $department)
                                        <li class="list-group-item">
                                            <a href="{{ route('get.product.list') }}?department_id={{$department->department_id}}" data-id="{{ $department->department_id }}">
                                                {{ $department->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Choose a Category
                            </div>
                            <div class="card-block">
                                <ul class="list-group list-group-flush">
                                    @foreach($categories as $category)
                                        <li class="list-group-item">
                                            <a href="/?{{ $category->link }}" data-id="{{ $category->category_id }}">
                                                {{ $category->name }} [{{ $category->id }}]
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h1>Có {{ $products->total() }} sản phẩm đang bán</h1>
                        <div class="list-card">
                            @foreach($products as $key => $product)
                                <div>
                                    [{{ $key+1 }}]
                                    <p>{{ $product->name }} -  {{ $product->relevance_score }}</p>
                                    <p>Price:
                                        <del> {{ $product->price }} </del>
                                        @if((int)$product->discounted_price > 0) {{ $product->discounted_price }} @endif
                                    </p>
                                    <form action="{{ route('post.cart.add', ['product_id'=> $product->id]) }}" class="add-product-form" target="_self" method="post">
                                        {{ csrf_field() }}
                                    <div>
                                        <div>
                                            <span class="badge badge-success">Category: </span>
                                            @foreach($product->category as $category)
                                                {{ $category->name }} [{{ $category->id }}],
                                            @endforeach
                                        </div>
                                        <div>
                                            @php $attribute = []; @endphp
                                            <span class="badge badge-warning">Thuộc tính</span>
                                            @foreach($product->attributeValue as $kFirst => $property)

                                                @if($kFirst == 0 || !in_array($property->attribute->name, $attribute))
                                                    {{ $property->attribute->name }}
                                                    <select name="attr_{{ $property->attribute->name }}" id="{{ $property->attribute->name }}">
                                                @endif

                                                    <option value="{{ $property->value }}">{{ $property->value }}</option>

                                                @if($loop->last || $property->attribute->name != $product->attributeValue[$kFirst+1]->attribute->name)
                                                </select>
                                                @endif

                                                @php
                                                    $attribute[] = $property->attribute->name
                                                @endphp

                                            @endforeach
                                        </div>
                                    </div>
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                    <a href="{{ route('get.product.detail', [$product->id]) }}" class="btn btn-primary btn-sm" role="button">View detail</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
                                    </form>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                        {{ $products->appends($quering)->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop