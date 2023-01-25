<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;

class StaffController extends Controller
{
	

	//course Details

	public function readStaff()
	{
		$_course_details = User::where('role', 1)->get();
		return view('staffAddinfo', ['staffsAdd' => $_course_details]);
	}

	public function updateProfile(Request $request, $id) {
		$request->validate([
			'staff_id' => 'required',
			'name' => 'required',
			'email' => 'required|email',
			'phone_number' => 'required',
			'faculty' => 'required',
		]);

		$staff = User::find($id);
		$staff->update($request->all());

		return redirect()->route('staff.home');
	}

	public function changePassword(Request $request, $id)
	{
		$request->only(['password']);
		$request->validate([
			'password' => 'required|min:8',
		]);
		$staff = User::find($id);
		$staff->password = bcrypt($request->password);
		$staff->save();
		return redirect()->route('staff.home');
	}

	public function updateInfo(Request $request, $id)
	{
		$_course_details = User::find($id);
		$_course_details->update($request->all());

		return redirect()->route('staffAddInfo');
	}

	public function createInfo(Request $request)
	{
		$_course_details = new User;
		$_course_details->courseID=$request->courseID;
		$_course_details->courseName=$request->courseName;
		$_course_details->faculty=$request->faculty;
		$_course_details->details = $request->details;
		$_course_details->role = 1;
		$_course_details->save();
		return redirect()->route('staffAddInfo');
	}

	public function deleteInfo($id)
	{
		$_course_details = User::find($id);
		$_course_details->delete($course);
		return redirect()->route('staffAddInfo');
	}

	public function readApplication()
	{
		$applications = Application::all();
		foreach ($applications as $row) {
			if ($row->publish == 1) {
				$row->publish = "Yes";
			} elseif ($row->publish == 0) {
				$row->publish = "No";
			}
		}
		return view('index_application', ['applications' => $applications]);
	}

}


