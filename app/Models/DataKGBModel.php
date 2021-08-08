<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKGBModel extends Model
{
    public function allData(){
        $data_kgb=[
                    [
                        'nip'=>"1111",
                        'nama'=>"Kaha",
                        'jabatan'=>"Pegawai"
                    ],
                    [
                        'nip'=>"2222",
                        'nama'=>"Fadil",
                        'jabatan'=>"Pegawai"
                    ],
                    [
                        'nip'=>"3333",
                        'nama'=>"Zaki",
                        'jabatan'=>"Pegawai"
                    ]
                ];
        
        return $data_kgb;
    }
}
