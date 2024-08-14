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
                    <h2 class="text-center mt-3">EDIT</h2>
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <form action="{{route('admin.productsManagement.updatePro',$product)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="" value="{{ $product->id }}">
                        <div class="mb-3">
                            <label for="pr_name" class="form-label">pr_name</label>
                            <input name="pr_name" type="text" class="form-control" id="pr_name"
                                value="{{ $product->pr_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                            <img id="image" src="{{ asset('storage/' . $product->thumbnail) }}" width="100px" alt="thumbnail.png"
                                class="mt-3">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input name="price" step="0.1" type="number" class="form-control" id="price"
                                value="{{ $product->price }}">
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input name="description" type="text" class="form-control" id="description"
                                value="{{ $product->pr_name }}">
                        </div>


                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->cate_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <center>

                            <button type="submit" class="btn btn-success mb-3">Update</button>
                        </center>
                    </form>
                </div>


            </div>


        </div>
    </div>

    </div>
@endsection
