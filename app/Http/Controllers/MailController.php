<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail as MailModel;

class MailController extends Controller
{
    public function send(Request $request) {
        $email = $request->input('email');

        Mail::to($request->user())->send(new MailModel($email));

        return back();
    }
}
