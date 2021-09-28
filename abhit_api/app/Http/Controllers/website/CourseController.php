<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Common\Activation;
use App\Models\Subject;
use App\Models\Chapter;

class CourseController extends Controller
{
    //
    protected function index()
    {
        # code...
        $courses = Course::where('is_activate',Activation::Activate)->paginate(10);
        $subjects = Subject::where('is_activate',Activation::Activate)->get();
        return view('website.course.course',\compact('courses','subjects'));
    }

    protected function details(Request $request)
    {
        # code...
        $course_id = \Crypt::decrypt($request->id);
        $course = Course::find($course_id);
        $chapters = Chapter::where([['course_id',$course_id],['is_activate',Activation::Activate]])->get();
        return view('website.course.courseDetails', compact('course','chapters'));

    }
}
