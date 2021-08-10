<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataKGBModel extends Model
{
    public function allData(){
        return DB::table('pegawai')->get();
    }
}
