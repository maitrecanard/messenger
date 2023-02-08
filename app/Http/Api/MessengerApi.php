<?php

namespace App\Http\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessengerApi extends Controller
{
    public function messenger(Request $request)
    {
        if ($request->filled(['name','email','message'])) {
 
            $name = $request->input('name');
            $email = $request->input('email');
            $message = $request->input('message');

 
            $data = [
                'name' => $name,
                'email' => $email,
                'message' => $message
            ];
       
            ContactController::sendMail($data);
            ContactController::mailForPublic($email, $data);
 
            return response()->json(
                Response::HTTP_OK
            );
                   
        }
    }
}