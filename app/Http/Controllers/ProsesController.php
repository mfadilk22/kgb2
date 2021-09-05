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

    public function index(){
        $tanggal = [
            "tanggal" => $this->KGBPegawai->prosestgl(),
        ];
    }
}
