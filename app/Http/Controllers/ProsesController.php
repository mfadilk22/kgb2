<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKGBModel;
use Carbon\Carbon;

class ProsesController extends Controller
{
    public function __construct()
    {
        $this->tanggal = new DataKGBModel();
    }

    public function update(Request $request){
        // dd($request);
        // $tanggal = [
        //     "tanggal" => $this->KGBPegawai->prosestgl(),
        // ];
        // return redirect()->route('datakgb');

        return request();
    }
}
