<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    protected function index(){
        $subjects = Subject::orderBy('id','DESC')->paginate(10);

        return view('admin.master.subjects.subjects', \compact('subjects'));
    }

    protected function create(Request $request){

        Subject::create([
            'name' => $request->name
        ]);

        return \redirect()->back();
    }

    protected function active(Request $request) {
        $subjects = Subject::find($request->catId);
        $subjects->is_activate = $request->active;
        $subjects->save();
    }
}
