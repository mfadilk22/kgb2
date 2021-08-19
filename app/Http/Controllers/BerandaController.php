<?php

namespace App\Http\Controllers;

use App\Models\DataKGBModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
      
    public function __construct()
    {
        $this->KGBPegawai = new DataKGBModel();
        $this->Selisih = new DataKGBModel();
        $this->sortedDate = new DataKGBModel();
    }
    public function index(){

        // $tgl = $this->KGBPegawai->formatTanggal();

        // foreach ($tgl as $tgl) {
        //     $tgl_baru = $tgl->Carbon::now()->isoFormat("D MMM YYYY");
        //     $selisih_tgl = $tgl_baru->subDays(30);
        // }        

        // $tgl = $this->KGBPegawai->formatTanggal();
        // $tanggal = [$tgl->tgl_kgb];
        // foreach ($tanggal as $tanggal) {
        //     $tanggal_2 = $tanggal->subDays(29);
        // }

        // foreach(DataKGBModel::all() as $datakgb){
        //     $datakgb->tgl_kgb;
        // }

        // $tes = $this->KGBPegawai->selisihTanggal();
        // dd($tes);

        // $fkhbbkfds = Carbon::now();
        // $kemarin = Carbon::yesterday();
        // $selisih = [];

        $tanggal = [
            "tanggal" => $this->KGBPegawai->formatTanggal(),
        ];

        // dd($tanggal);
        
        // foreach($tanggal as $tanggal){
        //     $hasil = $kemarin->diffInDays($fkhbbkfds);
        //     array_push($selisih, $hasil);
        // }

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

        return view("konten.v_beranda")
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
