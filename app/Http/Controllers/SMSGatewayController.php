<?php

namespace App\Http\Controllers;

use SMSGateway;
use Illuminate\Http\Request;

class SMSGatewayController extends Controller
{
    public function send(Request $request) {
        $email = $request->input('email');

        $deviceID = env('SMS_GATEWAY_DEVICE_ID', 1);
        $number = env('SMS_GATEWAY_PHONE_NUMBER', '+44771232343');
        $message = "Hello, {$email}!!!";

        $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);

        if(!empty($message['fails'])) {
            return back()->withErrors($message['fails']['errors']['device']);
        }

        return back();
    }
}
