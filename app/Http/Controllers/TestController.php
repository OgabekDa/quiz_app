<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\SentMessage;

class TestController extends Controller
{
    public function registratsiya(Request $request)
    {

    }
    public function __invoke(Request $request): SentMessage
    {
        $secret=rand();
        return Mail::to('davlatovogabek01@gmail.com')->send(new WelcomeMail([
            'name'=>'Hello',
            'secret'=>$secret
        ]));
    }
}

