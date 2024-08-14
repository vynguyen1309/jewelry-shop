@extends('index')
@section('title', 'Login')
@section('content')
    <div class="container w-50 container-login">
    <center>
        <h1>Login</h1>
    </center>
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id>
            </div>
            @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="mb-3 text-center">
                Bạn chưa có tài khoản?<a href="{{route('register')}} ">Register</a>
            </div>
        </form>
    </div>

@endsection
