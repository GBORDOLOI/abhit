<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Common\Activation;
use App\Models\Subject;
use App\Models\Chapter;
use Carbon\Carbon;

class CourseController extends Controller
{
    //
    protected function index()
    {
        # code...
        // $courses = Course::where('is_activate',Activation::Activate)->paginate(10);
        $publishCourse = [];
        $upComingCourse = [];

        $courses = Course::where('is_activate', Activation::Activate)->orderBy('id', 'DESC')->get();

        foreach ($courses as $key => $value) {
            # code...
            $publishDate = Carbon::parse($value->publish_date)->format('Y-m-d') ;
            $Today = Carbon::today()->format('Y-m-d');
            if ($publishDate < $Today) {
                //  dd('less today', $value->publish_date);
                $published['id']=$value->id;
                $published['name']=$value->name;
                $published['course_pic']=$value->course_pic;
                $published['duration']=$value->durations;
                $published['publish_date']=$value->publish_date;
                $publishCourse[] = $published;
            } elseif ($publishDate == $Today) {
                //    dd('Not Today', $value->publish_date);
                $publishTime = Carbon::parse($value->publish_date)->format('H:i');
                $presentTime = Carbon::now()->format('H:i');
                if ($publishTime < $presentTime) {
                    $published['id']=$value->id;
                    $published['name']=$value->name;
                    $published['course_pic']=$value->course_pic;
                $published['duration']=$value->durations;
                    $published['publish_date']=$value->publish_date;
                    $publishCourse[] = $published;
                } else {
                    $upcoming['id']=$value->id;
                    $upcoming['name']=$value->name;
                    $upcoming['course_pic']=$value->course_pic;
                $published['duration']=$value->durations;
                    $upcoming['publish_date']=$value->publish_date;
                    $upComingCourse[] = $upcoming;
                }
            } elseif ($publishDate > $Today) {
                // dd('GRATER Today', $value->publish_date);
                $upcoming['id']=$value->id;
                $upcoming['name']=$value->name;
                $published['duration']=$value->durations;
                $upcoming['course_pic']=$value->course_pic;
                $upcoming['publish_date']=$value->publish_date;
                $upComingCourse[] = $upcoming;
            }
        }
        $subjects = Subject::where('is_activate',Activation::Activate)->get();
        return view('website.course.course',\compact('subjects','publishCourse'));
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
