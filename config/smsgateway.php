<?php

/*
|--------------------------------------------------------------------------
|Smsgateway Credentials
|--------------------------------------------------------------------------
|
| Insert your credentials to use smsgateway API
|
*/

return [
    'email' => env('SMS_GATEWAY_EMAIL', 'demo@smsgateway.me'),
    'password' => env('SMS_GATEWAY_PASSWORD', 'your.password')
];
