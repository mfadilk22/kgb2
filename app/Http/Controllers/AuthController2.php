<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;


class AuthController2 extends Controller
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
            'id'                    => 'required|string',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'id.required'           => 'id wajib diisi',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus tidak cocok'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'id'        => $request->input('id'),
            'password'  => $request->input('password'),
        ];
 
        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('beranda');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'Id atau password salah');
            return redirect()->route('login');
        }
 
    }
 
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
