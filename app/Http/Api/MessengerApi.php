<?php

namespace App\Http\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;

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
                ["success"=>"Votre message a bien été envoyé"],
                Response::HTTP_OK
            );
                   
        } else {
            return response()->json(
                ["error" => "Veuillez renseigner tous les champs"],
                Response::HTTP_BAD_REQUEST
             );
        }
    }
}