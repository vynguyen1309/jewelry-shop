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

                    <form action="{{ route('admin.categoriesManagement.updateCate', $cate) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="" value="{{ $cate->id }}">
                        <div class="mb-3">
                            <label for="cate_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="cate_name" name="cate_name"
                                value="{{ $cate->cate_name }}" required>
                        </div>

                        <center> <button type="submit" class="btn btn-primary">Update</button></center>

                    </form>


                </div>
            </div>
        @endauth
    </div>


@endsection
