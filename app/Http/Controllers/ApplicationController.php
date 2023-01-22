<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = Application::all();
        return view('index_application', compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_application');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'level' => 'required|max:255',
            'nationality' => 'required|max:255',
            'campus' => 'required|max:255',
            'programme1' => 'required|max:255',
            'programme2' => 'required|max:255',
            'programme3' => 'required|max:255',
            'fullname' => 'required|max:255',
            'nric' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|max:255',
            'guardianname' => 'required|max:255',
            'guardianphone' => 'required|numeric',
            'guardiannric' => 'required|max:255',
            'guardianemail' => 'required|max:255',
        ]);
        $application = Application::create($storeData);
        return redirect('/applications')->with('success', 'Your application have been sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);
        return view('edit_application', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'level' => 'required|max:255',
            'nationality' => 'required|max:255',
            'campus' => 'required|max:255',
            'programme1' => 'required|max:255',
            'programme2' => 'required|max:255',
            'programme3' => 'required|max:255',
            'fullname' => 'required|max:255',
            'nric' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|max:255',
            'guardianname' => 'required|max:255',
            'guardianphone' => 'required|numeric',
            'guardiannric' => 'required|max:255',
            'guardianemail' => 'required|max:255',
        ]);
        Application::whereId($id)->update($updateData);
        return redirect('/applications')->with('success', 'Your application has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();
        return redirect('/applications')->with('success', 'Your application has been cancelled');
    }
}