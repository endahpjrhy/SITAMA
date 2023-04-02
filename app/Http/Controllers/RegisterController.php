<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrasiRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registrasi(Request $request)
    {
        $messages = [
            "required" => ":attribute harus diisi",
            "unique" => ":attribute sudah terdaftar",
            "password.confirmed" => "Password tidak cocok",
            "password.min" => "Password minimal 6 karakter",
            "password.min" => "Password minimal 6 karakter",
            "captcha.captcha'"   => "Captcha kamu salah!"

        ];

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|confirmed',
        ], $messages);

        $captcha = $request->validate([
            'captcha'   =>  ['required', 'captcha'],
        ], $messages);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = '2';

        $user = User::create($validatedData);
        activity()
            ->performedOn($user)
            ->causedBy(auth()->user())
            ->withProperties([
                'id' => $user->id,
                'nama' => $user->nama,
                'table' => 'users'
            ])
            ->log('Created Data');

        return redirect('/login');
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img('flat')]);
    }
}
