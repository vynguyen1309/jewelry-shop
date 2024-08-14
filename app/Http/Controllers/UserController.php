<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // //hien thi thong tin
    public function listUsers(User $user)
    {
        $users = User::orderByDesc('id')->paginate(15);
        return view('admin.usersManagement.listUser', compact('users'));
    }
    //create form
    public function createForm()
    {
        return view('admin.usersManagement.create');
    }
    //create user
    public function createUser(Register $request)
    {
        $data = $request->all();
        User::query()->create($data);
        return redirect()->route('admin.userManagement.listUser')->with('message','Đăng ký thành công');
    }
    //edit form
    public function editUser(User $user)
    {
        return view('admin.usersManagement.editUser', compact('user'));
    }
    // --- Update - ---
    public function updateUser(Request $request, User $user)
    {

        $user->update($request->all());
        return redirect()->route('admin.userManagement.editUser', $user)->with('message', 'Cập nhật thành công');
    }

public function deleteUser(User $user){

    if ($user->role != 'admin') {
          $user->delete();
        return redirect()->route('admin.userManagement.listUser')->with('error','Xóa thành công');
    }else{
        return redirect()->route('admin.userManagement.listUser')->with('error', 'Không thể xóa tài khoản là quản trị viên');
    }



}

}
