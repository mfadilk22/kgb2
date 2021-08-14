<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('beranda');
        }
        return view('konten.v_login');
    }
 
    public function login(Request $request)
    {
        $rules = [
            'user'                  => 'required|string',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'user.required'         => 'Nama user wajib diisi',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus tidak cocok'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'user'      => $request->input('user'),
            'password'  => $request->input('password'),
        ];
        
        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('beranda');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'User atau password salah');
            return redirect()->route('login');
        } 
    }
 
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
