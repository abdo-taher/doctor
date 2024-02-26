<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function checkup(loginRequest $request){

        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->with(['message' => 'بيانات غير صحيحة الرجاء التاكد من البيانات', 'alert-type' => 'error']);
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return redirect()->intended()->with(['message' => '^-^ تم تسجيل الدخول بنجاح مرحبا بك    ', 'alert-type' => 'success']);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login')->with(['message' => 'تم تسجيل الخروج بنجاح', 'alert-type' => 'info']);
    }
}
