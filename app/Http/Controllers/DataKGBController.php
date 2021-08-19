<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKGBModel;

class DataKGBController extends Controller
{
    public function __construct()
    {
        $this->KGBPegawai = new DataKGBModel();
        $this->Selisih = new DataKGBModel();
        $this->sortedDate = new DataKGBModel();
    }
    public function index(){
                
        $tanggal = [
            "tanggal" => $this->KGBPegawai->formatTanggal(),
        ];

        $data = [
            "kgb" => $this->KGBPegawai->allData(),                        
        ];

        $tanggal_skrg = [
            "selisih" => $this->KGBPegawai->selisihTanggal(),
            // "selisih" => $selisih,
        ];

        $sortedDate = [
            "sortedDate" => $this->sortedDate->sortedDate(),
        ];        

        return view("konten.v_datakgb")
                    ->with($data)
                    ->with($tanggal_skrg)
                    ->with($sortedDate)
                    ->with($tanggal);
    }

    //Function untuk tes cari selisih tanggal
    //Kalo udah bisa pindahin ke DataKGB
    public function selisih_tgl(){
        $tanggal = [
            "tanggal" => $this->KGBPegawai->formatTanggal(),
        ];
        return view("konten.v_beranda", $tanggal);
    }
}
