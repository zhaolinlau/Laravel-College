<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    /**
     * Show the course details section.
     *
     * @return \Illuminate\Http\Response
     */
    public function courseDetails()
    {
        return view('courseDetails');
    }


    /**
     * Show the course details section.
     *
     * @return \Illuminate\Http\Response
     */
    public function basicDetailsPost(Request $request)
    {
        $this->validate($request, [
        		'campus1' => 'required',
                'mode1' => 'required',
        		'levelofstudy1' => 'required',
                'intake1' => 'required',
        		'month1' => 'required',
                'programme1' => 'required',
                'faculty1' => 'required',
                'campus2' => 'required',
                'mode2' => 'required',
        		'levelofstudy2' => 'required',
                'intake2' => 'required',
        		'month2' => 'required',
                'programme2' => 'required',
                'faculty2' => 'required',
                'campus3' => 'required',
                'mode3' => 'required',
        		'levelofstudy3' => 'required',
                'intake3' => 'required',
        		'month3' => 'required',
                'programme3' => 'required',
                'faculty3' => 'required'
        	]);


        CourseDetails::create($request->all());


        return back()->with('success', 'Please fill in the personal details below.');
    }
}
