<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function checkup(loginRequest $request){
        $username = $request->username;
        $password = $request->password;
        $remember_token = $request->has('remember_token') ? true : false ;

        if (auth()->guard('web')->attempt(['username'=>$username,'password'=>$password],$remember_token)){
            return redirect()->route('index')->with(['success'=>'مرحبا بك مرة اخري ,' ]);
        }else{
            return redirect()->route('login')->withErrors(['fail'=>'خطا في اسم المستخدم او كلمة المرور ']);
        }
    }

    public function logout(){
        auth()->logout();
        return route('index');
    }
}
