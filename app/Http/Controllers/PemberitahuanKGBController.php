<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataKGBModel;

class PemberitahuanKGBController extends Controller
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

        return view("konten.v_pemberitahuankgb")
                    ->with($data)
                    ->with($tanggal_skrg)
                    ->with($sortedDate)
                    ->with($tanggal);        
    }
}
