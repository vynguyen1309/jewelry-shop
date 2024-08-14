@extends('index')
@section('pr_name', 'Home')
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
                    <h2 class="text-center mt-3">Add New Product</h2>
                    <form action="{{ route('admin.productsManagement.createPro') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="pr_name" class="form-label">Name</label>
                            <input name="pr_name" type="text" class="form-control" id="pr_name">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thumbnail</label>
                            <input class="form-control" type="file" id="formFile" name="thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input name="price" type="text" class="form-control" id="price">
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id="quantity">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input name="description" type="text" class="form-control" id="description">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cate_name }}</option>
                                @endforeach
                            </select>
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
