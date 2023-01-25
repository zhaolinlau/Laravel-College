<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseInfosController extends Controller
{
    public function index(){
        $courses=CourseInfos::all();
        return view('staffAddinfo',[
            'courses'=>$courses,
        ]);
    }
    public function Courseindex(){
        $courses = \App\Models\Course::all();
        return view('staffAddinfo',['courses'=> $courses]);
    }

    public function insert(Request $request)
	{
		Course::insert($request->except(['_token']));
		return redirect()->back()->with('success', 'Your message has been sent.');
	}

    public function edit($id) {
        $courses = \App\Models\Course::find($id);
        return view('/editCourse',['courses'=>$courses]);
    }

    public function update(Request $request, $id){
        $courses = \App\Models\Course::find($id);
        $courses -> update ($request -> all());
        return redirect('/staffAddinfo')->with('success', 'Data Successfully Updated !');
    }

    public function delete($id) {
        $courses = \App\Models\Course::find($id);
        $courses->delete($courses);
        return redirect('/staffAddinfo')->with('success', 'Data Successfully Deleted !');
    }

   
}
