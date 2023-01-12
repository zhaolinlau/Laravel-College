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
                'programme2' => 'required',
                'faculty2' => 'required',
                'programme3' => 'required',
                'faculty3' => 'required'
        	]);


        CourseDetails::create($request->all());


        return back()->with('success', 'Please fill in the personal details below.');
    }
}
