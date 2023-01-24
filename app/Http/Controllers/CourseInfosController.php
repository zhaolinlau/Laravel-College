<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CourseDetails;

class CourseInfosController extends Controller
{
    public function index(){
        $courses=CourseInfos::all();
        return view('staffAddinfo',[
            'courses'=>$courses,
        ]);
    }

    public function edit($id) {
        $courses=$courses::find($id);
        return view('editCourse',['courses'=>$courses]);
    }

    public function update(Request $request, $id) {
        $courses=$courses::find($id);
        $courses->update($request->all());
        return redirect('/ ')->with('success', 'Data Successfully Updated !');
    }

    public function delete($id) {
        $courses=$courses::find($id);
        $courses->delete($courses);
        return redirect('/ ')->with('success', 'Data Successfully Deleted !');
    }
}
