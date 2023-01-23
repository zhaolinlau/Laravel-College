<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseInfosController extends Controller
{
    public function faqindex(){
        $data_courseinfo=courseinfo::all();
        return view('staffAddinfo',[
            'data_courseinfo'=>$data_courseinfo,
        ]);
    }

    public function edit($id) {
        $data_courseinfo=$data_courseinfo::find($id);
        return view('editCourse',['data_courseinfo'=>$data_courseinfo]);
    }

    public function update(Request $request, $id) {
        $data_courseinfo=$data_courseinfo::find($id);
        $data_courseinfo->update($request->all());
        return redirect('/ ')->with('success', 'Data Successfully Updated !');
    }

    public function delete($id) {
        $data_courseinfo=$data_courseinfo::find($id);
        $data_courseinfo->delete($data_courseinfo);
        return redirect('/ ')->with('success', 'Data Successfully Deleted !');
    }
}
