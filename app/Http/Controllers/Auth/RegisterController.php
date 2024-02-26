<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'firstName' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'birthday' => bcrypt($request->birthday),
            'gender' => bcrypt($request->gender),
        ]);
        $user->login($request);
        return route('index');
    }
}
