<?php

namespace App\Http\Controllers;

use App\Models\DataKGBModel;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __construct()
    {
        $this->DataKGBModel = new DataKGBModel();
    }
    public function index(){
        $data = [
            "kgb" => $this->DataKGBModel->allData(),
        ];
        return view("konten.v_beranda", $data);
    }
}
