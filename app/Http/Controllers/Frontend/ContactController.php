<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){

        return view('frontend.contact');
    
    }

    public function uploadcontact(Request $request)
    {
        $data = new Contact;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();
    }
}
