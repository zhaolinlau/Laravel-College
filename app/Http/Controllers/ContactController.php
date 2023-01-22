<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{
	public function contactindex(){
        $data_contact = \App\Models\Contacts::all();
        return view('contact_us',['data_contact'=> $data_contact]);
    }

	public function insert(Request $request)
	{
		Contacts::insert($request->except(['_token']));
		return redirect()->back()->with('success', 'Your message has been sent.');
	}

	public function contactStaffindex(){
        $data_contact = \App\Models\Contacts::all();
        return view('contactStaff',['data_contact'=> $data_contact]);
    }
	public function delete($id){
        $data_contact = \App\Models\Contacts::find($id);
        $data_contact -> delete($data_contact);
        return redirect('contactStaff') -> with('success','Data Deleted Succesfully');
    }
}
