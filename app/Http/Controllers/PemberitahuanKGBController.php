<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemberitahuanKGBController extends Controller
{
    public function index(){
        return view ('konten.v_pemberitahuankgb');
    }
}
