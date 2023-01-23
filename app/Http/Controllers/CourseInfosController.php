<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseInfosController extends Controller
{
    public function faqindex(){
        $data_courseinfo=courseinfo::all();
        return view('faqindex',[
            'data_courseinfo'=>$data_courseinfo,
        ]);
    }
}
