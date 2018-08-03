<?php

namespace App\Http\Controllers;

use App\Mail\SimpleContact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct() {
        $this->middleware('cors', ['only' => ['sendMail']]);
    }

    public function sendMail(Request $request) {

        //errors in french
        App::setLocale('fr');

        //Valid request parameters
        $validatedData = $request->validate([
            'email' => 'bail|required|email',
            'message' => 'required|min:10|max:500'
        ]);

        //User to send (it's me)
        $me = new User();
        $me->email = env('MAIL_USERNAME');

        //reformat message for MarkDown
        $messageMd = preg_replace("/(.)(\n)(.)/i", '$1$2$2$3', $request->message);

        //Send mail
        Mail::to($me)->send(new SimpleContact($request->email, $messageMd));

        //Return Ok
        return response()->json('ok');
    }
}
