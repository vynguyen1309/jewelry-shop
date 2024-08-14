@extends('index')
@section('title', 'Register')
@section('content')
    <div class="container w-50 container-login">
        <center>
            <h1>Register</h1>
        </center>

            {{-- <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <ul>
                        <li>{{ $error }}</li>
                    </ul>
                @endforeach
            </div> --}}

        <form action="{{ route('accRegister') }}" method="POST">
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
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="mb-3 text-center">
                Bạn đã có tài khoản?<a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection
