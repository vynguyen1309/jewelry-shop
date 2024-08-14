<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //view register
    public function register()
    {
        return view('register');
    }
    //dang ky
    public function accRegister(Register $request)
    {
        $data = $request->all();
        User::query()->create($data);
        return redirect()->route('login')->with('message','Đăng ký thành công');
    }
    //view login
    public function login()
    {
        return view('login');
    }
    //dang nhap
    public function accLogin(Request $request)
    {
        $data = $request->only(['email', 'password']);
        // dd($data);
        //kiem tra dang nhap
        if(Auth::attempt($data)){
            return redirect()->route('users.home');
        }else{
            return redirect()->back()->with('error','Email hoặc password không chính xác! Vui lòng nhập lại');
        }


    }
    // đăng xuất
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
