<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserApply;

class UserApplyController extends Controller
{
    public function index()
    {
        return view('user_apply');
    }
    public function store(Request $request)
    {
        $post = new UserApply;
        $post->level = $request->level;
        $post->nationality = $request->nationality;
        $post->nric = $request->nric;
        $post->campus = $request->campus;
        $post->levelofstudy = $request->levelofstudy;
        $post->programme1 = $request->programme1;
        $post->faculty1 = $request->faculty1;
        $post->programme2 = $request->programme2;
        $post->faculty2 = $request->faculty2;
        $post->programme3 = $request->programme3;
        $post->faculty3 = $request->faculty3;
        $post->fullname = $request->fullname;
        $post->phone = $request->phone;
        $post->email = $request->email;
        $post->guardianname = $request->guardianname;
        $post->guardianphone = $request->guardianphone;
        $post->guardiannric = $request->guardiannric;
        $post->guardianemail = $request->guardianemail;
        $post->save();
        return redirect('user_applies')->with('status', 'Your Application has been saved and sent.');
    }
}
