<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{

	public function insert(Request $request)
	{
		Contacts::insert($request->except(['_token']));
		return redirect()->back()->with('success', 'Your message has been sent.');
	}
}
