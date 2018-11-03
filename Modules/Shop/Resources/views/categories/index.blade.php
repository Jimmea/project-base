@extends('shop::layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/main_category.css') }}">
@stop
@section('content')
    <main class="page__category">
        <div class="container wrapper">
            <div class="row">
                <div class="col-md-3">
                    <div class="page__category-filter mb-3">
                        <div class="page__category-filter-heading text-center">
                            DANH MỤC SẢN PHẨM
                        </div>
                        <div class="page__category-filter-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label for="clothing">
                                        <input type="checkbox" name="category" id="clothing"> WOMEN'S CLOTHING
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Dresses">
                                        <input type="checkbox" name="category" id="Dresses"> Dresses
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Tops">
                                        <input type="checkbox" name="category" id="Tops"> Tops
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Playsuits & Jumpsuits">
                                        <input type="checkbox" name="category" id="Playsuits & Jumpsuits"> Playsuits &
                                        Jumpsuits
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Pants & Leggings">
                                        <input type="checkbox" name="category" id="Pants & Leggings"> Pants & Leggings
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Swimwear & Beachwear">
                                        <input type="checkbox" name="category" id="Swimwear & Beachwear"> Swimwear &
                                        Beachwear
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">Xem thêm <i class="fa fa-angle-down"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="page__category-filter mb-3">
                        <div class="page__category-filter-heading text-center">
                            GIÁ SẢN PHẨM
                        </div>
                        <div class="page__category-filter-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label for="M">
                                        <input type="checkbox" name="size" id="M"> < 100.000 đ
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="M">
                                        <input type="checkbox" name="size" id="M"> 100.000 - 200.000 đ
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="M">
                                        <input type="checkbox" name="size" id="M"> 200.000 - 300.000đ đ
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="M">
                                        <input type="checkbox" name="size" id="M"> 300.000 - 400.000 đ
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="M">
                                        <input type="checkbox" name="size" id="M"> > 400.000 đ
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">Xem thêm <i class="fa fa-angle-down"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="page__category-filter mb-3">
                        <div class="page__category-filter-heading text-center">
                            KÍCH THƯỚC
                        </div>
                        <div class="page__category-filter-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label for="M">
                                        <input type="checkbox" name="size" id="M"> M
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for=L>
                                        <input type="checkbox" name="size" id=L> L
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="43">
                                        <input type="checkbox" name="size" id="43"> 43
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="42">
                                        <input type="checkbox" name="size" id="42"> 42
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="XL">
                                        <input type="checkbox" name="size" id="XL"> XL
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="XXL">
                                        <input type="checkbox" name="size" id="XXL"> XXL
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">Xem thêm <i class="fa fa-angle-down"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="page__category-filter mb-3">
                        <div class="page__category-filter-heading text-center">
                            MÀU SẮC
                        </div>
                        <div class="page__category-filter-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label for="Begine">
                                        <input type="checkbox" name="color" id="Begine"> Begine
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Blue">
                                        <input type="checkbox" name="color" id="Blue"> Blue
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Brown">
                                        <input type="checkbox" name="color" id="Brown"> Brown
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Gold">
                                        <input type="checkbox" name="color" id="Gold"> Gold
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Green">
                                        <input type="checkbox" name="color" id="Green"> Green
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <label for="Multi">
                                        <input type="checkbox" name="color" id="Multi"> Multi
                                    </label>
                                </li>
                                <li class="list-group-item">
                                    <span class="pull-right">Xem thêm <i class="fa fa-angle-down"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="page__category-breadcrumbs">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="js-breadcrumb"><span itemprop="title">Home</span></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/women" class="js-breadcrumb"><span itemprop="title">Women</span></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/women/clothing" class="js-breadcrumb"><span
                                            itemprop="title">Women's Clothing</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="page__category-listing">
                        <ul class="page__category-item nav">
                            @for($i =0;$i < 30; $i ++)
                                <li class="page__category-item-group">
                                    <a href="/abercrombie-fitch-mid-thigh-parka-coat-black-934413.html"
                                       class="page__category-item-link">
                                        <div class="page__category-item-thumb">
                                            <img src="https://dynamic.zacdn.com/5fzEURQWGqIME7tit5P4EfUKEdc=/fit-in/236x345/filters:quality(95):fill(ffffff)/http://static.sg.zalora.net/p/abercrombie-fitch-8799-314439-1.jpg"
                                                 alt="">
                                        </div>

                                        <div class="page__category-item-brand">
                                            <strong>Abercrombie & Fitch</strong>
                                        </div>

                                        <div class="page__category-item-name">
                                            <h2>Quần áo mùa đông</h2>
                                        </div>

                                        <div class="page__category-item-price">
                                            <span>881.000 ₫ </span>
                                        </div>
                                        <div class="page__category-item-size">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-xs-center">Size</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-xs-center">X</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-xs-center">XXL</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-xs-center">M</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-xs-center">M</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </a>
                                    <div class="page__category-item-buy text-center mt-2">
                                        <button class="btn btn-dark btn-sm">Mua ngay</button>
                                        <button class="btn btn-outline-dark btn-sm" data-toggle="modal"
                                                data-target="#preview-product">Xem trước
                                        </button>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="page__category-pagination pull-right">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="preview-product" tabindex="-1" role="dialog" aria-labelledby="product-title"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body-right">
                        <div class="product-name">
                            Iphone 6s Quốc Tế 16gb Fullbox - Sc41vn
                        </div>
                        <div class="product-price mb-2">
                            <span class="product-price-old"><del>5.900.000 đ</del></span>
                            <span class="product-price-new">4.235.000 đ</span>
                        </div>
                        <div class="product-teaser">
                            - Monochrome oversized coat <br>
                            - Lapel neckline <br>
                            - Lined <br>
                            - Regular fit <br>
                            - Button fastening <br>
                            - 2 pockets <br>
                        </div>

                        {{--<div class="product-meta mt-2">--}}
                            {{--<h5>Thông tin cơ bản</h5>--}}
                            {{--<div class="product-meta-info">--}}
                                {{----}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="button-close">
                            <a href="#" data-dismiss="modal">Đóng</a>
                        </div>
                    </div>
                    <div class="modal-body-left">
                        <div class="product-thumb mb-3">
                            <img src="{{ asset('imgs/product.jpg') }}" class="img-fluid">
                        </div>
                        <div class="product-option">
                            <div class="product-opt-size">
                                <div class="name">
                                    Kích thước
                                </div>
                                <div class="value">
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                    <span>XXL</span>
                                </div>
                            </div>
                            <div class="product-opt-color">
                                <div class="name">
                                    Màu sắc
                                </div>
                                <div class="value">
                                    <span>Đỏ</span>
                                    <span>Vàng</span>
                                    <span>Xanh</span>
                                    <span>Tím</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-buy mt-3">
                            <button type="button" class="btn btn-outline-dark btn-buy-later" data-dismiss="modal">Lưu
                                mua sau
                            </button>
                            <button type="button" class="btn btn-dark btn-buy-now">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
