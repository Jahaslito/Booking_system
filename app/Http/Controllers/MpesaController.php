<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MpesaController extends Controller
{
    //let's start...

    //To access any mpesa api, we need to have a token
    public function getAccessToken(){
        $ch= curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
        curl_setopt($ch, CURLOPT_HTTPHEADER,['Authorization: Basic VWdpUkJBTXZ5RzRsZTZndFRHSmNyc0hJNEdId0pYTFc6dVp6aHZieVBnYlFOdHlNTA==']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        return $response->access_token;

    }
    /*
    * Mpesa Daraja Api has more than one APIs based on its services.
      These APIS include MPESA EXPRESS (Stkpush), B2C, B2B ....
      To interact with these different APIS requests are made to 
      different urls. In a nutshell, requests will be made to 
      different destinations. Nevertheless, the http request header of
      all the requests remains the same. So to avoid writing the http
      header again and again for all the APIs, we can extract out the
      code for inflating the http header and making an Http connection
      in a separate method called  makeHTTP. 
      Credit to *Ben*      
     */

     //make an Http connection
    public function makeHttp($url, $body){
        //Different apis, different urls...
        $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
        $curl= curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-type:application/json','Authorization:Bearer '. $this->getAccessToken()),
                CURLOPT_RETURNTRANSFER =>true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );
        $curl_response= curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    } 

    public function stkpush(Request $request){
        $phoneNumber= $request->phoneNumber;

        $timestamp = date('YmdHis');
        /*
        password is the base64 encoding of the concatination of 
        the MPESA_STK_SHORTCODE, MPESA_PASSKEY, and the timestamp
        source: daraja documentation
        */
        $password = base64_encode(env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp);
        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => '1',
            'PartyA' => $phoneNumber,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => 'https://a96d20ff7d59.ngrok.io/api/responseStkPush',
            'AccountReference' => 'Trial',
            'TransactionDesc' => 'Trial'
          );

        $url = '/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        //save the booking information in the database 
        // $booking= new Booking();
        // $booking->seat_number=$request->seat_number;
        // $booking->ticket_number= $this->generateTicketNumber();
        // $booking->user_id= Auth::id();
        // $booking->save();
        return $response;
    }
    public function generateTicketNumber(){
        //As a starting point, the length of the ticket number has six digits 
        $ticketNumberDigit=6;
        $booking= Booking::latest()->first();
        $bookingId=$booking->id;
        $bookingIdLength=strlen($bookingId);
        if($bookingIdLength >= $ticketNumberDigit){
            //If the system exhaust all the six digits, we are going to increase the digit by 4.
            $ticketNumberDigit+=4;
        }
        $loopCounter= $ticketNumberDigit-$bookingIdLength;
        $alphabetArray= array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
       
        $generatedDummyLetters="";
        for ($i=0; $i <$loopCounter; $i++) { 
            $letterIndex=rand(0,25);
            $generatedDummyLetters.=$alphabetArray[$letterIndex];
        }
        $finalGeneratedTicketNumber=$generatedDummyLetters.$bookingId;
        return str_shuffle($finalGeneratedTicketNumber);
    }
}
