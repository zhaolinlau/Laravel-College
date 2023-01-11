<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{
    /**
     * Show the basic details section.
     *
     * @return \Illuminate\Http\Response
     */
    public function basicDetails()
    {
        return view('basicDetails');
    }


    /**
     * Show the basic details section.
     *
     * @return \Illuminate\Http\Response
     */
    public function basicDetailsPost(Request $request)
    {
        $this->validate($request, [
        		'salutation' => 'required',
                'fullname' => 'required',
        		'phone' => 'required',
                'email' => 'required|email',
        		'guardianname' => 'required',
                'guardianphone' => 'required',
                'guardiannric' => 'required',
                'guardianemail' => 'required|email',
        		'relationship' => 'required'
        	]);


        PersonalDetails::create($request->all());


        return back()->with('success', 'Thank you for filling! Your application has been sent and will be processed.');
    }
}
