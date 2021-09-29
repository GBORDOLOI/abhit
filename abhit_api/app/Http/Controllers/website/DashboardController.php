<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Common\Activation;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Course;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    protected function index()
    {
        $banner = Banner::where('is_activate', Activation::Activate)->take(5)->orderBy('id', 'DESC')->get();
        $blogs = Blog::where('is_activate', Activation::Activate)->take(3)->orderBy('id', 'DESC')->get();
        // $gallery = Gallery::where('is_activate',Activation::Activate)->take(4)->orderBy('id','DESC')-get();
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
                    $published['publish_date']=$value->publish_date;
                    $publishCourse[] = $published;
                } else {
                    $upcoming['id']=$value->id;
                    $upcoming['name']=$value->name;
                    $upcoming['course_pic']=$value->course_pic;
                    $upcoming['publish_date']=$value->publish_date;
                    $upComingCourse[] = $upcoming;
                }
            } elseif ($publishDate > $Today) {
                // dd('GRATER Today', $value->publish_date);
                $upcoming['id']=$value->id;
                $upcoming['name']=$value->name;
                $upcoming['course_pic']=$value->course_pic;
                $upcoming['publish_date']=$value->publish_date;
                $upComingCourse[] = $upcoming;
            }
        }
        // dd($publishCourse);
        return view('website.home', \compact('banner', 'blogs', 'upComingCourse', 'publishCourse'));
    }
}
