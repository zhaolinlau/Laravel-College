<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Application;
>>>>>>> d41a3440df19fa36665912e02c3bab3337128f0f
use Illuminate\Http\Request;

class StaffController extends Controller
{
	

	//course Details

	public function readStaff()
	{
		$_course_details = User::where('role', 1)->get();
		return view('staffAddinfo', ['staffsAdd' => $_course_details]);
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


