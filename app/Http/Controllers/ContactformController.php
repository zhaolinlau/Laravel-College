<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contactform;

class ContactformController extends Controller
{
    function savingtodatabase(Request $req)
    {
        //print_r($var->input());
        $var = new contactform;
        $var->name = $req->yourname;
        $var->email = $req->youremail;
        $var->phone = $req->yourphone;
        $var->subject = $req->yoursubject;
        $var->message = $req->yourmessage;
        $var->save();
        return back()->with('success','Noted With thanks.');
    }
}
