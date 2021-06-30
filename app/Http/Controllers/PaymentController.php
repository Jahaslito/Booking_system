<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function stkPush(Request $request){
        Log::info('STK Push endpoint hit');
      
        Log::info($request->all());
        // return [
        //     'ResultCode' => 1,
        //     'ResultDesc' => 'Accept Service',
        //     'ThirdPartyTransID' => rand(3000, 10000)
        // ];
    }
}
