<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use KingFlamez\Rave\Facades\Rave as Flutterwave;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
     public function initialize()
     {
        //This generates a payment reference
        $reference = Flutterwave::generateReference();
 
        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => request()->amount,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "NGN",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => request()->email,
                "phone_number" => request()->phone,
                "name" => request()->name
            ],

            "customizations" => [
            "title" => 'Donation To SWAT Foundation'
            ]
        ];
 
        $payment = Flutterwave::initializePayment($data);
 
 
        if ($payment['status'] !== 'success') {
            return back()->with('unsuccess','Payment Failed. Please try again later');
        }
 
        return redirect($payment['data']['link']);
    }
 
    /**
    * Obtain Rave callback information
    * @return void
    */
    public function callback()
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);
            return back()->with('success','Thank you for Your Donation!');
            //dd($data);
        }
        elseif ($status ==  'cancelled'){
            return back()->with('unsuccess','Payment Cancelled');
        }
        else{
            return back()->with('unsuccess','Payment Failed. Please try again later');
        }
    }
}
