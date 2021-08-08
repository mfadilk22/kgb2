<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKGBModel;

class DataKGBController extends Controller
{
    public function __construct()
    {
        $this->DataKGBModel = new DataKGBModel();
    }
    public function index(){
        $data = [
            "kgb" => $this->DataKGBModel->allData(),
        ];
        return view("konten.v_datakgb", $data);
    }
}
