@extends('index')
@section('cate_name', 'Home')
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

                <div class="container w-50">
                    <h2 class="text-center mt-3">Add New Category</h2>
                    <form action="{{ route('admin.categoriesManagement.createCate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="cate_name" class="form-label">Name</label>
                            <input name="cate_name" type="text" class="form-control" id="cate_name" placeholder="Nhập tên danh mục">
                        </div>
                        <center>
                            <button name="" type="submit" class="btn btn-success mb-3">Add</button>
                        </center>
                    </form>
                </div>

                </div>


            </div>
        </div>

    </div>
@endsection
