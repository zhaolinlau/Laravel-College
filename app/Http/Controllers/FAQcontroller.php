<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faq_programme;
use App\Models\faqadmissions;

class FAQcontroller extends Controller
{
    public function faqindex(){
        $data_faqprogramme=faq_programme::all();
        $data_faqadmission=faqadmissions::all();
        return view('faqindex',[
            'data_faqprogramme'=>$data_faqprogramme,
            'data_faqadmission'=>$data_faqadmission
        ]);
    }

    public function create1(Request $request) {
        \App\Models\faq_programme::create($request->all());
        return redirect('/faqdata')->with('success', 'New Data Inserted !');
    }

    public function create2(Request $request) {
        \App\Models\faqadmissions::create($request->all());
        return redirect('/faqdata')->with('success', 'New Data Inserted !');
    }

    public function edit1($id) {
        $data_faqprogramme=faq_programme::find($id);
        return view('editFAQ1',['data_faqprogramme'=>$data_faqprogramme]);
    }

    public function edit2($id) {
        $data_faqadmission=faqadmissions::find($id);
        return view('editFAQ2',['data_faqadmission'=>$data_faqadmission]);
    }

    public function update1(Request $request, $id) {
        $data_faqprogramme=faq_programme::find($id);
        $data_faqprogramme->update($request->all());
        return redirect('/faqdata')->with('success', 'Data Successfully Updated !');
    }

    public function update2(Request $request, $id) {
        $data_faqadmission=faqadmissions::find($id);
        $data_faqadmission->update($request->all());
        return redirect('/faqdata')->with('success', 'Data Successfully Updated !');
    }

    public function delete1($id) {
        $data_faqprogramme=faq_programme::find($id);
        $data_faqprogramme->delete($data_faqprogramme);
        return redirect('/faqdata')->with('success', 'Data Successfully Deleted !');
    }

    public function delete2($id) {
        $data_faqadmission=faqadmissions::find($id);
        $data_faqadmission->delete($data_faqadmission);
        return redirect('/faqdata')->with('success', 'Data Successfully Deleted !');
    }
}
