<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Laravel Mix - CSS File --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{--<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">--}}
    </head>
    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
                <div class="flex-row d-flex">
                    <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#" title="Free Bootstrap 4 Admin Template">Admin System</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsingNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Account</a>
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
                            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Order</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('departments.index') }}">Department</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('attributes.index') }}">Attribute</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('attributes.index') }}">Config system</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                        </ul>
                    </div>

                    <div class="col main pt-5 mt-3" style="background: #ffffff;">
                        <h1 class="display-4 d-none d-sm-block">
                            @yield('title')
                        </h1>
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
        {{-- Laravel Mix - JS File --}}
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
