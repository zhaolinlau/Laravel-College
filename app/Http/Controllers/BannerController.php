<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class BannerController extends Controller
{
	public function showBanner()
	{
		$banners = Banner::where('publish', 1)->get();
		return view('index', ['banners' => $banners]);
	}

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
		try {
			$request->validate([
				'image' => 'required|image|mimes:jpeg,jpg,png',
				'title' => 'max:50',
				'description' => 'max:100',
				'publish' => 'required|boolean'
			]);

			$originalName = $request->file('image')->getClientOriginalName();
			$filename = time() . '_' . $originalName;

			$destinationPath = public_path('img/banners');

			$request->file('image')->move($destinationPath, $filename);

			$banner = new Banner;
			$banner->title = $request->title;
			$banner->description = $request->description;
			$banner->image =  $filename;
			$banner->publish = $request->publish;
			$banner->save();

			return redirect()->route('staff.banner_list');
		} catch (ValidationException) {
			return redirect()->back()->with('error', 'Only .jpeg, .jpg, and .png image formats are allowed to be uploaded.');
		}
	}



	public function deleteBanner($id)
	{
		$banner = Banner::findOrFail($id);

		$imagePath = public_path('img/banners/' . $banner->image);

		if (file_exists($imagePath)) {
			unlink($imagePath);
		}

		$banner->delete();

		return redirect()->route('staff.banner_list');
	}

	public function modifyBanner(Request $request, $id)
	{
		try {
			$request->validate([
				'image' => 'sometimes|image|mimes:jpeg,jpg,png',
				'title' => 'max:50',
				'description' => 'max:100',
				'publish' => 'required|boolean'
			]);

			$banner = Banner::findOrFail($id);

			if ($request->hasFile('image')) {
				$oldImagePath = public_path('img/banners/' . $banner->image);
				if (file_exists($oldImagePath)) {
					unlink($oldImagePath);
				}

				$originalName = $request->file('image')->getClientOriginalName();
				$filename = time() . '_' . $originalName;
				$destinationPath = public_path('img/banners');
				$request->file('image')->move($destinationPath, $filename);
				$banner->image = $filename;
			}

			$banner->title = $request->title;
			$banner->description = $request->description;
			$banner->publish = $request->publish;
			$banner->save();

			return redirect()->route('staff.banner_list');
		} catch (ValidationException) {
			return redirect()->back()->with('error', 'Only .jpeg, .jpg, and .png image formats are allowed to be uploaded.');
		}
	}

	public function Banner($id)
	{
		$banner = Banner::find($id);
		return view('banner', ['banner' => $banner]);
	}
}
