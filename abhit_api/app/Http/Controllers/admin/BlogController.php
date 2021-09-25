<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    protected function index()
    {
        return view('admin.master.blog.blog');
    }

    protected function ckeditorImage(Request $request)
    {
        $CKEditor = $request->input('CKEditor');
        $funcNum  = $request->input('CKEditorFuncNum');
        $message  = $url = '';
        if (Input::hasFile('upload')) {
            $file = Input::file('upload');
            // if ($file->isValid()) {
                $filename =rand(1000,9999).$file->getClientOriginalName();
                $file->move(public_path('files/blog/ck'), $filename);
                $url = asset('files/blog/ck/' . $filename);
            // } else {
            //     $message = 'An error occurred while uploading the file.';
            // }
        } else {
            $message = 'No file uploaded.';
        }
        echo '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';

    }

    protected function create(Request $request){

        $blog = $request->data;
        $document = $request->pic;
        if (isset($document) && !empty($document)) {
            $new_name = date('d-m-Y-H-i-s') . '_' . $document->getClientOriginalName();
            // $new_name = '/images/'.$image.'_'.date('d-m-Y-H-i-s');
            $document->move(public_path('/files/blog/image/'), $new_name);
            $file = 'files/blog/image/' . $new_name;
        }

        Blog::create([
            'name' => $request->name,
            'blog_image' => $file,
            'blog' => $blog
        ]);

        return \response()->json(['status'=>1]);
    }
}
