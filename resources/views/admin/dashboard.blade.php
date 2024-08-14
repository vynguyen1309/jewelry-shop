@extends('index')
@section('title', 'Home')
@section('content')
    <div class="container mt-3 container-login">
        <div class="row">
            <div class="col-lg-3">
                <h3 class="text-center">Danh Mục Quản Lý</h3>
                <div class="d-flex justify-content-center align-items-center">
                    <ul class="list-unstyled m-0 p-0 ">
                        <li class="box-list-category mt-2 mb-2"><a href="{{route('admin.productsManagement.listProduct')}}"
                                class="text-uppercase text-decoration-none text-dark">Quản Lý Sản Phẩm</a></li
                            class="box-list-category mt-2 mb-2">
                        <li class="box-list-category mt-2 mb-2"><a href="{{route('admin.categoriesManagement.listCate')}}"
                                class="text-uppercase text-decoration-none text-dark">Quản Lý Danh Mục Sản phẩm</a></li
                            class="box-list-category mt-2 mb-2">
                        <li class="box-list-category mt-2 mb-2"><a href="{{route('admin.userManagement.listUser')}}"
                                class="text-uppercase text-decoration-none text-dark">Quản Lý Tài Khoản</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 ">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-3 mb-4 pro-hover box-management ">
                        <h4 class="title">Sản Phẩm</h4>
                        <p class="total">{{ $totalProducts }}</p>
                    </div>
                    <div class="col-md-3 mb-4 pro-hover box-management ">
                        <h4 class="title">Danh Mục Sản Phẩm</h4>
                        <p class="total">{{ $totalCategories }}</p>
                    </div>
                    <div class="col-md-3 mb-4 pro-hover box-management">
                        <h4 class="title">Tài Khoản</h4>
                        <p class="total">{{ $totalUsers }}</p>
                    </div>

                </div>
                {{-- data --}}

                </div>


            </div>
        </div>

    </div>
@endsection
