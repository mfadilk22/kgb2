<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataKGBModel extends Model
{
    public function allData(){
        return DB::table('pegawai')->get();
    }

    public function formatTanggal(){
        $tanggal =  DB::table('pegawai')->pluck("tgl_kgb");        
        return $tanggal;
    }
}
