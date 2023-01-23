<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
	public function showBanner()
	{
		$banners = Banner::where('publish', 1)->get();
		return view('index', ['banners' => $banners]);
	}
}
