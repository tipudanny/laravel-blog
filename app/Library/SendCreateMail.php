<?php

namespace App\Library;

use App\Mail\CreateNewProductMail;
use Illuminate\Support\Facades\Mail;

trait SendCreateMail
{
    public function sendMail($mailData){
        $email = 'example@mail.com';
        Mail::to($email)->send(new CreateNewProductMail($mailData));
    }
}
