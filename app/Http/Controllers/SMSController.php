<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index(){
        return view('admin.sms');
    }

    public function sms_send(){
         return view('admin.sms-send');
    }
}
