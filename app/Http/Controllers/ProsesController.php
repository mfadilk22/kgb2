<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKGBModel;
use Carbon\Carbon;

class ProsesController extends Controller
{
    public function __construct()
    {
        $this->data = new DataKGBModel();
        $this->tanggal = new DataKGBModel();
    }

    public function update(Request $request){
        $data = $this->data->sortedDate();
        // DataKGBModel::find($id_peg)->update($request->all());
        // $tanggal = [
        //     "tanggal" => $this->KGBPegawai->prosestgl(),
        // ];
        // return redirect()->route('datakgb');

        return request();
    }
}
