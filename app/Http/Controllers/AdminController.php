<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function readStaff()
	{
		$staffs = User::where('role', 1)->get();
		return view('staff_list', ['staffs' => $staffs]);
	}

	public function createStaff(Request $request)
	{
		$staff = new User;
		$staff->staff_id=$request->staff_id;
		$staff->name=$request->name;
		$staff->email=$request->email;
		$staff->phone_number=$request->phone_number;
		$staff->faculty->$request->faculty;
		$staff->role->$request->role;
		$staff->save();
		return redirect('admin');
	}
}
