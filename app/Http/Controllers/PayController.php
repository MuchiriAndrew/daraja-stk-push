<?php

namespace App\Http\Controllers;

use Safaricom\Mpesa\Mpesa;


class PayController extends Controller
{
    public function stkPush() {

        $mpesa= new Mpesa();
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = 1;
        $PartyA = 254113005226;
        $PartyB = '174379';
        $PhoneNumber = 254113005226;
        $CallBackURL = 'https://www.andrewmuchiri.com/path/callback_url.php';
        $AccountReference = 'Cart';
        $TransactionDesc = 'Cart';
        $Remarks = 'Cart';

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );
        // dd($stkPushSimulation);
    }
}
