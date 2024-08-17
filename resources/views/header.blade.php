<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <title>ASM</title>
    <style>

    </style>
</head>

<body>
    <header class="header ">
        {{-- Header top --}}
        <div class="header-top bg-danger">
            <div class="container navbar ">
                <div class="top-bar left">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a href="#"><i class="fa fa-envelope me-2 " aria-hidden="true"></i>
                                Assignment@gmail.com</a>
                        </li>
                        {{-- <li class="nav-item me-2"><a href="#"> Free Shipping for all Order </a></li> --}}
                    </ul>
                </div>
                <div class="top-bar right row">
                    <ul class="nav social-list float-left col">
                        <li class="nav-item me-2"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item me-2"><a href="#"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item me-2"><a href="#"><i class="fa fa-pinterest"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="login">
                    @guest
                        <ul class="nav col">
                            <li class="nav-item"><a href="{{ route('login') }}" class="login me-2">Login</a><a
                                    href="{{ route('register') }}" class="ms-2 register">Register</a></li>
                        </ul>
                    @endguest
                </div>
                <div class="auth">
                    @auth
                        Hello, <b>{{ Auth::user()->fullname }}</b>
                        <a href="{{ route('logout') }}" class="btn btn-outline-info text-light">Logout</a>
                        {{-- <a href="" class="btn btn-outline-info text-light">Change Password</a> --}}
                        @if (Auth::user()->role_id == 1)
                            <a href="{{route('admin.home')}}" class="btn btn-success">Admin Panel</a>
                        @endif
                    @endauth
                </div>

            </div>
        </div>
        {{-- Header main --}}
        <div class="header-main container ">
            <div class=" row d-flex align-items-center">
                <div class="head-logo col-lg-3 text-center">
                    <a href="{{ route('users.home') }}"><img width="200px" src="{{ asset('picture/logo.png') }}"
                            alt="logo.jpg"></a>
                </div>
                <div class="nav-main col-lg-6 ">
                    <ul class="nav d-flex justify-content-around">
                        <li class="nav-item me-2"><a href="{{ route('users.home') }}">Trang Chủ</a></li>
                        <li class="nav-item me-2"><a href="{{ route('users.listPro') }}">Sản Phẩm</a></li>
                        <li class="nav-item me-2"><a href="#">Giới Thiệu</a></li>
                        <li class="nav-item me-2"><a href="#">Liên Hệ</a></li>
                        <li class="nav-item me-2"><a href="#">Giỏ hàng</a></li>
                    </ul>
                </div>
                {{-- <div class="search col-lg-3 ">
                <form action="#">
                    <input type="search" placeholder="Search...">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </div> --}}
                <div class="search-bar d-flex align-items-center col-lg-3">
                    <form action="#" class="d-flex w-100">
                        <input type="search" class="form-control me-2 rounded-pill border border-secondary"
                            placeholder="Search..." aria-label="Search">
                        <button type="submit" class="btn btn-outline-secondary rounded-pill px-3">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>



    </header>
