<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Admin system</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{--<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">--}}
        <style>
            #sidebar {
                height: 100vh;
            }
            #sidebar .nav-link {
                color:#000;
            }
            .color_red  {
                color: red;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark mb-3">
                <div class="flex-row d-flex">
                    <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#" title="Free Bootstrap 4 Admin Template">System Admin</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsingNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"> Hi admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"> Website setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"> Thông tin tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"> Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                        <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                            <li class="nav-item"><a class="nav-link" href="#">Bảng điều khiển</a></li>
                            <li class="nav-item">
                                {{--<a class="nav-link" href="{{ route('orders.index') }}">Quản lý đơn hàng</a>--}}
                                {{--<ul class="treeview-menu menu-open" style="display: block;">--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order">--}}
                                            {{--<i class="fa fa-shopping-cart"></i>--}}
                                            {{--<span>Đơn hàng</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order_status">--}}
                                            {{--<i class="fa fa-asterisk"></i>--}}
                                            {{--<span>Order status</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_payment_status">--}}
                                            {{--<i class="fa fa-recycle"></i>--}}
                                            {{--<span>Payment status</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="{{ route('attributes.index') }}">Shipping status</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Nhà cung cấp</a></li>--}}
                                {{--</ul>--}}
                            </li>
{{--                            <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Khách hàng</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="{{ route('departments.index') }}">Department</a></li>--}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Danh mục</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    Sản phẩm</a>
                                {{--<ul class="treeview-menu menu-open" style="display: block;">--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order">--}}
                                            {{--<i class="fa fa-shopping-cart"></i>--}}
                                            {{--<span>Thêm mới</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="{{ route('products.index') }}">--}}
                                            {{--<i class="fa fa-asterisk"></i>--}}
                                            {{--<span>Danh sách</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_payment_status">--}}
                                            {{--<i class="fa fa-recycle"></i>--}}
                                            {{--<span>Giá khuyến mại</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_payment_status">--}}
                                            {{--<i class="fa fa-recycle"></i>--}}
                                            {{--<span>Coupon & Khuyến mại</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="{{ route('attributes.index') }}">Thuộc tính</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blogs.index') }}">Tin tức</a>
                                {{--<ul class="treeview-menu menu-open" style="display: block;">--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order">--}}
                                            {{--<i class="fa fa-shopping-cart"></i>--}}
                                            {{--<span>Thêm mới</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order_status">--}}
                                            {{--<i class="fa fa-asterisk"></i>--}}
                                            {{--<span>Danh sách</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tags.index') }}">Tag tin tức</a>
                                {{--<ul class="treeview-menu menu-open" style="display: block;">--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order">--}}
                                            {{--<i class="fa fa-shopping-cart"></i>--}}
                                            {{--<span>Sản phẩm</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a class="nav-link" href="/system_admin/shop_order_status">--}}
                                            {{--<i class="fa fa-asterisk"></i>--}}
                                            {{--<span>Tin tức</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </li>
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('banners.index') }}">Banner</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('statics.index') }}">Trang tĩnh</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="{{ route('settings.index') }}">Cấu hình website</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="{{ route('accounts.index') }}">Phân quyền quản trị</a></li>--}}
                        </ul>
                    </div>

                    <div class="col main pt-5 mt-4" style="background: #ffffff;">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <a href="">Admin</a> /
                                <a href="{{ route('categories.index') }}">Category</a>
                            </div>
                        </div>

                        @if(has_flash('success'))
                            <div class="alert alert-success alert-dismissible" id="#myadmin-alert"
                                 role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="alert-heading"><strong>Thông báo</strong></h4>
                                {{ get_flash('success') }}
                            </div>
                        @endif
                        @if(has_flash('error'))
                            <div class="alert alert-warning alert-dismissible" id="#myadmin-alert"
                                 role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="alert-heading"><strong>Thông báo</strong></h4>
                                {{ get_flash('error') }}
                            </div>
                        @endif

                        <h2 class="display-5 d-none d-sm-block mb-4">
                            @yield('title')
                        </h2>
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
        {{-- Laravel Mix - JS File --}}
         <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function ()
            {
                setTimeout(function () {
                    $('#myadmin-alert').fadeOut('slow').remove();
                }, 3000);

                $('.closed').click(function ()
                {
                    $('#myadmin-alert').remove();
                })
            })
        </script>
        @yield('script')
    </body>
</html>
