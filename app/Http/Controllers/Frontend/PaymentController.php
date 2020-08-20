<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Uzzal\SslCommerz\Client;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Uzzal\SslCommerz\IpnNotification;

class PaymentController extends Controller
{
    public function success(Request $request)
    {
     if(ipn_hash_varify(config('sslcommerz.store_password'))){
            $ipn = new IpnNotification($_POST);
            $val_id = $ipn->getValId();
            $transaction_id = $ipn->getTransactionId();
            $amount = $ipn->getAmount();
            $resp = Client::verifyOrder($val_id);
           $payment= Payment::where('tran_id',$transaction_id)->first();
          if($payment != null){
              $payment->update(['status'=>'succeeded']);
              echo "success";
          }else{
              $payment->update(['status' => 'failed']);
              echo "failed";
          }
        }
    }

}
