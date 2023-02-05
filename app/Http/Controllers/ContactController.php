<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\Connexion;
use App\Mail\ForPublic;
use App\Mail\Indiscrete;
use App\Models\Exploitant;

class ContactController extends Controller
{
    public static function sendMail($data)
    {
        $exploitant = Exploitant::first();
        Mail::to($exploitant->mail)->send(new Contact($data));
    }

    public static function mailForPublic($email, $data)
    {
        Mail::to($email)->send(new ForPublic($data));
    }
}