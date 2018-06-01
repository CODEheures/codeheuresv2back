<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    public function __construct() {
        $this->middleware('cors', ['only' => ['sendMail']]);
    }

    public function sendMail(Request $request) {
        App::setLocale('fr');
        $validatedData = $request->validate([
            'email' => 'bail|required|email',
            'message' => 'required|min:10|max:500'
        ]);

        return response()->json("message posted");
    }
}
