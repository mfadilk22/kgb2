<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKGBModel;
use Carbon\Carbon;

class ProsesController extends Controller
{
    public function __construct()
    {
        $this->data = new DataKGBModel();
        $this->tanggal = new DataKGBModel();
    }

    public function update(Request $request){
        // $data = $this->data->sortedDate();
        $durasi = DataKGBModel::where("id_peg",request("id"))->first();
        //$date = Carbon::parse($durasi->tgl_kgb)->year + 2;
        $date_update = Carbon::parse($durasi->tgl_kgb)->addYear(2)->format("Y-m-d");
        $updated = DataKGBModel::where("id_peg",request("id"))->update(['tgl_kgb' => $date_update]);

        // dd($updated);
        //$date = DataKGBModel::select('tgl_kgb')->where("id_peg",request("id"));
        // $Carbon = Carbon::parse($durasi);       
        // $baru = $Carbon + 2;
        //$durasi->tgl_kgb = whereYear();
        // $tanggal = [
        //     "tanggal" => $this->KGBPegawai->prosestgl(),
        // ];
        
        return redirect()->route('datakgb')->with('message', 'KGB Pegawai telah diproses');
        
    }
}
