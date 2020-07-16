<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.index');
    }

    public  function loginProcess(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        if(auth()->attempt($credentials))
        {
            $destination = [
                'admin'=>'dashboard',
                'customer'=>'home'
            ];
            if(array_key_exists(auth()->user()->role,$destination)){
                return  redirect()->route($destination[auth()->user()->role]);
            }
            return redirect()->route('dashboard');
        }
        notify()->error('Credentials Invalid');
       return  redirect()->back();
    }

    public function logout()
    {
        if(auth()->user()->role === 'admin'){
            auth()->logout();
            return redirect()->route('login.index');
        }
        auth()->logout();
        return redirect()->route('home');
    }
}
