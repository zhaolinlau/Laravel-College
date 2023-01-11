<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BasicDetails;

class BasicDetailsController extends Controller
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
        		'type' => 'required',
                'level' => 'required',
        		'application' => 'required',
                'nationality' => 'required',
        		'nric' => 'required'
        	]);


        BasicDetails::create($request->all());


        return back()->with('success', 'Please fill in the programme details below.');
    }
}
