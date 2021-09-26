<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\SendEmail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{




    public function create()
    {
        return view('dashboard.mail.create');

    }

    public function send(MailRequest $request)
    {


        Mail::to($request->emails)->send(new SendEmail($request->title, $request->message));




    }


}
