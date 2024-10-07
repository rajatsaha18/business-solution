<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SmsController extends Controller
{
    public function index()
    {
        return view('sms.sendsms');
    }
    public function sms_send(Request $request)
    {
    $url = "http://bulksmsbd.net/api/smsapi";
    $api_key = "fMD9XYByFwmJc3pfEm5k";
    $senderid = "8809617618501";
    $number = $request->number;
    $message = $request->message;

    $data = [
        "api_key" => $api_key,
        "senderid" => $senderid,
        "number" => $number,
        "message" => $message
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return redirect()->back()->with('message', 'Message sent successfully');
    }
}
