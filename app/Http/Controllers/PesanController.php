<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderProcessed;
use App\Models\DataKGBModel;
use Database\Factories\PesanFactory;
use Twilio\Rest\Client;
use Carbon\Carbon;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->data = new DataKGBModel();
        $this->selisih = new DataKGBModel();
    }
    public function kirim(Request $request)
    {         
        $data = $this->data->nomorhp();
        if (request()->isMethod('post')){
            
            $sid    = getenv("TWILIO_AUTH_SID"); 
            $token  = getenv("TWILIO_AUTH_TOKEN"); 
            $twilio = new Client($sid, $token);

            foreach ($data as $dataa ) {
                if(Carbon::parse($dataa->tgl_kgb)->diffInDays(now()) < 33){
                    $message = $twilio->messages 
                                ->create("whatsapp:".$dataa->no_hp, // to 
                                    [
                                        "from" => "whatsapp:+14155238886",
                                        "body" => "[".$dataa->nama."]"."\n".request("pesan")
                                    ]
                                );
                }
            }
    }
        return redirect()->route('beranda')->with('message', 'Pesan Sudah Dikirim!');
        
    }
}
