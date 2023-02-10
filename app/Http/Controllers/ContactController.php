<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\ForPublic;
use App\Models\Exploitant;
use App\Providers\ErrorsServiceProvider;


class ContactController extends Controller
{
    public static function sendMail($data)
    {
        $exploitant = Exploitant::first();
        try {
            Mail::to($exploitant->mail)->send(new Contact($data));
        } catch(\Exxeption $e) {
            ErrorsServiceProvider::error('messenger',$e);
        }
       
    }

    public static function mailForPublic($email, $data)
    {
        try {
            Mail::to($email)->send(new ForPublic($data));
        } catch(\Exxeption $e) {
            ErrorsServiceProvider::error('messenger',$e);
        }
    }
}