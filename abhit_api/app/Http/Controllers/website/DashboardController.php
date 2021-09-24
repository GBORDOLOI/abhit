<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Common\Activation;
use App\Models\Blog;

class DashboardController extends Controller
{
    //
    protected function index(){
        $banner = Banner::where('is_activate',Activation::Activate)->take(5)->orderBy('id','DESC')->get();
        $blogs = Blog::where('is_activate',Activation::Activate)->take(3)->orderBy('id','DESC')->get();
        return view('website.home', \compact('banner','blogs'));
    }
}
