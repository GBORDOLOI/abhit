<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Carbon\Carbon;

class CourseController extends Controller
{
    //

    protected function index()
    {
        $course = Course::orderBy('id', 'DESC')->paginate(10);

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
            'time' => Carbon::parse($request->publish_time)->format('H:i:s'),
            'description' => $request->data,

        ]);

        return response()->json(['status'=>1]);
    }

    protected function ckeditorImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('files/course/ckImage'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('files/course/ckImage/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    protected function editCourse(Request $request)
    {
        $course_id = \Crypt::decrypt($request->id);

        $course = Course::find($course_id);

        return view('admin.course.edit', \compact('course'));
    }

    protected function edit(Request $request)
    {
        $course_id = \Crypt::decrypt($request->id);
        $document = $request->pic;
        $course = Course::where('id',$course_id)->first();

        if ($document->getClientOriginalName() == 'blob') {
            $course->name = $request->name;
            $course->subject_id = $request->subject_id;
            $course->publish_date = Carbon::parse($request->publish_date.$request->publish_time)->format('Y-m-d H:i:s');
            $course->time = Carbon::parse($request->publish_time)->format('H:i:s');
            $course->description = $request->data;
            $course->save();

        } else {

            if (isset($document) && !empty($document)) {
                $new_name = date('d-m-Y-H-i-s') . '_' . $document->getClientOriginalName();
                // $new_name = '/images/'.$image.'_'.date('d-m-Y-H-i-s');
                $document->move(public_path('/files/course/'), $new_name);
                $file = 'files/course/' . $new_name;
            }
            $course->name = $request->name;
            $course->subject_id = $request->subject_id;
            $course->course_pic = $file;
            $course->publish_date = Carbon::parse($request->publish_date.$request->publish_time)->format('Y-m-d H:i:s');
            $course->time = Carbon::parse($request->publish_time)->format('H:i:s');
            $course->description = $request->data;
            $course->save();

        }

        return response()->json(['status'=>1]);

    }

    protected function active(Request $request) {
        $course = Course::find($request->catId);
        $course->is_activate = $request->active;
        $course->save();
    }
}
