<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseInfosController extends Controller
{
	public function index()
	{
		$courses = Course::all();
		return view('staffAddinfo', [
			'courses' => $courses,
		]);
	}
	public function Courseindex()
	{
		$courses = Course::all();
		return view('staffAddinfo', ['courses' => $courses]);
	}

	public function insert(Request $request)
	{
		Course::insert($request->except(['_token']));
		return redirect()->back()->with('success', 'Your message has been sent.');
	}

<<<<<<< Updated upstream
	public function edit($id)
	{
		$courses = Course::find($id);
		return view('/editCourse', ['courses' => $courses]);
	}
=======
    public function edit($id) {
        $courses = \App\Models\Course::find($id);
        return view('/editCourse',['courses'=>$courses]);
    }

    public function update(Request $request, $id){
        $courses = \App\Models\Course::find($id);
        $courses -> update($request -> all());
        return redirect('/staffAddinfo')->with('success', 'Data Successfully Updated !');
    }
>>>>>>> Stashed changes

	public function update(Request $request, $id)
	{
		$courses = Course::find($id);
		$courses->update($request->all());
		return redirect('/staffAddinfo')->with('success', 'Data Successfully Updated !');
	}

	public function delete($id)
	{
		$courses = Course::find($id);
		$courses->delete($courses);
		return redirect('/staffAddinfo')->with('success', 'Data Successfully Deleted !');
	}
}
