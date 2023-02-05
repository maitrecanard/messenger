<?php

namespace App\Http\Controllers;

use App\Models\Exploitant;

class RedirectController extends Controller
{
    public function redirect()
    {
        $exploitant = Exploitant::first();
        return redirect()->away('https://'.$exploitant->dns);
    }
}