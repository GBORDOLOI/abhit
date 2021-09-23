<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Carbon\Carbon;

class CourseController extends Controller
{
    //

    protected function index(){

        $course = Course::orderBy('id','DESC')->paginate(10);

        return view('admin.course.course', \compact('course'));
    }

    protected function create(Request $request)
    {
        # code...

        $document = $request->pic;
        if (isset($document) && !empty($document)) {
            $new_name = date('d-m-Y-H-i-s') . '_' . $document->getClientOriginalName();
            // $new_name = '/images/'.$image.'_'.date('d-m-Y-H-i-s');
            $document->move(public_path('/files/course/'), $new_name);
            $file = 'files/course/' . $new_name;
        }

        Course::create([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'course_pic' => $file,
            'publish_date' => Carbon::parse($request->publish_date.$request->publish_time)->format('Y-m-d H:i:s'),
            'time' => Carbon::parse( $request->publish_time)->format('H:i:s'),
            // 'description' => $request->description,

        ]);

        return response()->json(['status'=>1]);
    }
}
