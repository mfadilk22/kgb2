<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function data(){
        $fadil = Admin::all();
        return view('konten.v_beranda', ['fadil'=>$fadil]);
    }
}
