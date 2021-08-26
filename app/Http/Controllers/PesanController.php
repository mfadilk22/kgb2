<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderProcessed;
use App\Models\DataKGBModel;
use Database\Factories\PesanFactory;
use Twilio\Rest\Client;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->nomorhp = new DataKGBModel();
    }
    public function kirim(Request $request)
    {         
        // $order = DataKGBModel::factory()->create();
        // //$order = factory(\App\Order::class)->create();
        // $request->user()->notify(new OrderProcessed($order));
        $nomorhp = [
            "no_hp" => $this->nomorhp->nomorhp(),
        ];

        if (request()->isMethod('post')){
            $sid    = getenv("TWILIO_AUTH_SID"); 
            $token  = getenv("TWILIO_AUTH_TOKEN"); 
            $twilio = new Client($sid, $token);            
            
            foreach ($nomorhp['no_hp'] as $no) {                             
                $message = $twilio->messages 
                            ->create("whatsapp:".$no->no_hp, // to 
                                [
                                    "from" => "whatsapp:+14155238886",
                                    "body" => request("pesan")
                                ]
                            );
            }
              
        //     $message = $twilio->messages 
        //                     ->create("whatsapp:+6285274076337", // to 
        //                         [
        //                             "from" => "whatsapp:+14155238886",
        //                             "body" => request("pesan")
        //                         ]
        //                     );
        //    $message = $twilio->messages 
        //                     ->create("whatsapp:+6282366299530", // to 
        //                         [
        //                             "from" => "whatsapp:+14155238886",
        //                             "body" => request("pesan")
        //                         ]
        //                     ); 
                                  
            //print($message->sid);
        }
     
 

 
 
 
        

        // if (request()->isMethod('post')){
        //     $to = "+82362516853";
        //     $from = getenv("TWILIO_WHATSAPP_FROM");
        //     $message = request('pesan');
        //     //open connection
    
        //     $ch = curl_init();
    
        //     //set the url, number of POST vars, POST data
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //     curl_setopt($ch, CURLOPT_USERPWD, getenv("TWILIO_AUTH_SID").':'.getenv("TWILIO_AUTH_TOKEN"));
        //     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        //     curl_setopt($ch, CURLOPT_URL, sprintf('https://api.twilio.com/2010-04-01/Accounts/'.getenv("TWILIO_AUTH_SID").'/Messages.json', getenv("TWILIO_AUTH_SID")));
        //     curl_setopt($ch, CURLOPT_POST, 3);
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, 'To='.$to.'&From='.$from.'&Body='.$message);
    
        //     // execute post
        //     $result = curl_exec($ch);
        //     $result = json_decode($result);
    
        //     // close connection
        //     curl_close($ch);
        //     //Sending message ends here

        //     return [$result];
    
        // }
        return redirect()->route('beranda')->with('status', 'Order Placed!');
    }
}
