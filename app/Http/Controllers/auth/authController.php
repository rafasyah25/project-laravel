<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{
    public function loginForm(Request $request)
    {
        return view('auth.login');
    }

    public function auth(Request $request){
        $credential = $request->only('nim', 'password');
        $validator = Validator::make($credential, [
            'nim' => 'required',
            'password' => 'required',
        ]);
        // Cek Validasi Form
        if ($validator->fails()){
            return back()->withInput()->withErrors($validator)->withInput($request->all());
        }

        //Cek Credential
        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return "no";
        // return back()->withErrors(['message' => 'Akun Salah / Tidak di temukan']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request()->session()->invalidate();
        $request()->session()->regenerateToken();
        redirect('/login');
    }
 
}
