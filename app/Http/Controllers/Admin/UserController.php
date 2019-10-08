<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAdminLogin(){
        return view("admin.user.login");
    }
    public function postAdminLogin(Request $request){
        $this->validate($request,[
            'email' =>'required',
            'password' =>'required'
        ],[
            'email.required' => "Bạn chưa nhập Email",
            'password.required'  => "Bạn chưa nhập Mật khẩu",
        ]);
        $email=$request->email;
        $password=$request->password;
        if(Auth::guard()->attempt(['email'=>$email,'password'=>$password,'level'=>2,'active'=> 1])){;
            return redirect('admin/index');
        }else{
            return redirect('admin/dang-nhap')->with('loi','Sai Email hoặc mật khẩu hoặc bạn không có quyền đăng nhập vào trang này');
        }

    }
}
