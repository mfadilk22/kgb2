<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataKGBModel extends Model
{
    
    protected $primaryKey = 'id_peg';
    protected $table = "pegawai";
    public $timestamps = false;

    public function allData(){
        $kgb = DataKGBModel::all();
        return $kgb;
    }

    public function formatTanggal(){
        $tanggal =  DataKGBModel::all("tgl_kgb");        
        return $tanggal;
    }

    public function selisihTanggal(){
        $tanggal = DataKGBModel::select("tgl_kgb")->get();
        $selisih = [];

        foreach($tanggal as $tanggal){
            array_push( $selisih, Carbon::parse($tanggal->tgl_kgb)->diffInDays(now()));
        }
                       
        return $selisih;
    }

    public function sortedDate(){
        $tanggal = collect(DataKGBModel::all());
        
        $sorted = $tanggal->sortBy('tgl_kgb');
        $sorted->all();
                               
        return $sorted;
    }

    public function nomorhp(){
        $no_hp = DataKGBModel::select("no_hp")->get();
        return $no_hp;
    }
    
}
