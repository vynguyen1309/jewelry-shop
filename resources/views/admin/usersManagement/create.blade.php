@extends('index')
@section('title', 'UsesManagemnet')
@section('content')
    <div class="container-login">
        @auth
            <div class="row justify-content-center container ">
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
                <div class="col-lg-9">
                    <form action="{{ route('admin.userManagement.createUser') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Fullname</label>
                            <input type="text" class="form-control @error('fullname') is-invalid @enderror " name="fullname" value="{{old('fullname')}}" >
                            @error('fullname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" >
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" >
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>


                </div>
            </div>
        @endauth
    </div>


@endsection
