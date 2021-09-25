<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Common\Activation;

class BlogController extends Controller
{
    //

    protected function details(Request $request){
        $blog_id = \Crypt::decrypt($request->id);

        $blog = Blog::find($blog_id);

        return view('website.blog.bloddetails', \compact('blog'));
    }

    protected function getBlog()
    {
        $blogs = Blog::where('is_activate', Activation::Activate)->orderBy('id','DESC')->paginate(10);

        return view('website.blog.blog',\compact('blogs'));
    }
}
