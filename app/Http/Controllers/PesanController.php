<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderProcessed;
use App\Models\DataKGBModel;
use Database\Factories\PesanFactory;

class PesanController extends Controller
{
    public function store(Request $request)
    {
         
        $order = \App\Models\DataKGBModel::factory()->create();
        $request->user()->notify(new OrderProcessed($order));

        return redirect()->route('beranda')->with('status', 'Order Placed!');
    }
}
