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
                <div class="card">
                    <center class="card-header">{{ __('Users') }}</center>
                    <div class="card-body">
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
                        <table class="table table-bordered">
                            <h2><a href="{{route('admin.userManagement.createForm')}}" class="btn btn-success">Add</a></h2>
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Full Name') }}</th>
                                    <th>{{ __('Username') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->fullname }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('admin.userManagement.editUser', Auth::user()) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.userManagement.deleteUser', $user) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mt-2"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm không?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{ $users->links()}}
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
    @endauth
</div>
@endsection
