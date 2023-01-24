<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
	public function readBanner()
	{
		$banners = Banner::all();
		foreach ($banners as $row) {
			if ($row->publish == 1) {
				$row->publish = "Yes";
			} elseif ($row->publish == 0) {
				$row->publish = "No";
			}
		}
		return view('banner_list', ['banners' => $banners]);
	}

	public function uploadBanner(Request $request)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpeg,jpg,png,webp',
			'title' => 'required',
			'publish' => 'required|boolean'
		]);

		$image = $request->file('image')->getClientOriginalName();
		$banner = new Banner;
		$banner->title = $request->title;
		$banner->image = $image;
		$banner->publish = $request->publish;
		$request->file('image')->storeAs('/images/', $image);
		$banner->save();
		return redirect()->route('staff.banner_list');
	}

	public function deleteBanner($id)
	{
		$banner = Banner::find($id);
		$image = $banner->image;
		$banner->delete();
		Storage::delete('/images/' . $image);
		return redirect()->route('staff.banner_list');
	}

	public function modifyBanner(Request $request, $id)
	{
		$request->validate([
			'image' => 'sometimes|image|mimes:jpeg,jpg,png,webp',
			'title' => 'required',
			'publish' => 'required|boolean'
		]);

		$banner = Banner::find($id);
		if ($banner) {
			if ($request->hasFile('image')) {
				Storage::delete('/images/' . $banner->image);
				$image = $request->file('image')->getClientOriginalName();
				$request->file('image')->storeAs('/images/', $image);
				$banner->image = $image;
			}
			$banner->title = $request->title;
			$banner->publish = $request->publish;
			$banner->save();
		}
		return redirect()->route('staff.banner_list');
	}

	public function Banner($id) {
		$banner = Banner::find($id);
		return view('banner', ['banner' => $banner]);
	}

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


