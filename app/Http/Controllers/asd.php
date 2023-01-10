<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
	function contact(Request $req)
	{
		//print_r($var->input());
		$var = new Contact;
		$var->name = $req->name;
		$var->email = $req->email;
		$var->phone_number = $req->phone_number;
		$var->subject = $req->subject;
		$var->message = $req->message;
		$var->save();
		return back()->with('success', 'Noted With thanks.');
	}
}
