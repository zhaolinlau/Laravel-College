<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
	public function readStaff()
	{
		$staffs = User::where('role', 1)->orderBy('id', 'desc')->get();
		return view('staff_list', ['staffs' => $staffs]);
	}

	public function readProfile($id)
	{
		$staff = User::find($id);
		return view('staff_profile', ['staff' => $staff]);
	}

	public function updateStaff(Request $request, $id)
	{
		try {
			$request->validate([
				'staff_id' => 'required|unique:users,staff_id,' . $id,
				'email' => 'required|email|unique:users,email,' . $id,
				'name' => 'required',
				'phone_number' => 'required',
				'faculty' => 'required',
			]);

			$staff = User::find($id);
			$staff->update($request->all());

			return redirect()->route('admin.staff_list');
		} catch (ValidationException) {
			return redirect()->back()->with('error', 'Email or Staff ID already exists!');
		}
	}


	public function createStaff(Request $request)
	{
		try {
			$request->validate([
				'staff_id' => 'required|unique:users',
				'name' => 'required',
				'email' => 'required|email|unique:users',
				'password' => 'required',
				'phone_number' => 'required',
				'faculty' => 'required',
			]);

			$staff = new User();
			$staff->staff_id = $request->staff_id;
			$staff->name = $request->name;
			$staff->email = $request->email;
			$staff->password = bcrypt($request->password);
			$staff->phone_number = $request->phone_number;
			$staff->faculty = $request->faculty;
			$staff->role = 1;
			$staff->save();
			return redirect()->route('admin.staff_list');
		} catch(ValidationException) {
			return redirect()->back()->with('error', 'Email or Staff ID already exists!');
		}
	}

	public function readPassword($id)
	{
		$staff = User::find($id);
		return view('staff_password', ['staff' => $staff]);
	}

	public function resetPassword(Request $request, $id)
	{
		$request->only(['password']);
		$request->validate([
			'password' => 'required',
		]);
		$staff = User::find($id);
		$staff->password = bcrypt($request->password);
		$staff->save();
		return redirect()->route('admin.staff_list');
	}

	public function deleteStaff($id)
	{
		$staff = User::find($id);
		$staff->delete($staff);
		return redirect()->route('admin.staff_list');
	}
}
