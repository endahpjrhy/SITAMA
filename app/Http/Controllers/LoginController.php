<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('/dashboard');
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $message = [
            'required'        => ':attribute masih kosong!',
            'email'        => 'Format email salah!',
            'captcha.captcha'    => 'Captcha kamu salah!'
        ];
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], $message);

        $captcha = $request->validate([
            'captcha'   =>  ['required', 'captcha'],
        ], $message);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['msg' => 'Login Gagal']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img('flat')]);
    }
}
