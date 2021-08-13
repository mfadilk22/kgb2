<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemberitahuanKGBController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index(){
        return view ('konten.v_pemberitahuankgb');
    }
}
