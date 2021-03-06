<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Common\Activation;

class ChapterController extends Controller
{
    //
    protected function index($id){
        $course_id = \Crypt::decrypt($id);

        return view('admin.chapter.chapter', \compact('course_id'));
    }

    protected function create(Request $request)
    {
        # code...
        $course_id = \Crypt::decrypt($request->id);

        $checkChapterName = Chapter::where('course_id',$course_id)->where('name', $request->name)->exists();
        if($checkChapterName == true){
            $request->session()->flash('error', 'Chapter name already exists');
            return redirect()->back();
        }else{
            // dd($request->name,$request->price,$course_id);

            foreach ($request->name as $key => $value) {
                # code...
                foreach ($request->price as $key1 => $value1) {
                    # code...
                    if($key == $key1) {
                        $data['name'] = $value;
                        $data['course_id'] = $course_id;
                        $data['price'] = $value1;
                        $insertingData[] = $data;
                    }
                }
            }

            Chapter::insert($insertingData);
            $request->session()->flash('success', 'Chapter added successfully');
            return redirect()->back();

        }
    }
}
