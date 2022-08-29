<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect('home');
        }else{
            return view('login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::Attempt($data)){
            return redirect('home');
        }else{
            Session::flash('error', 'salah');
            return redirect('/');     
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
