<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    //
    protected function index()
    {
        $banners = Banner::orderBy('id','DESC')->paginate(10);
        return view('admin.master.banner.banner', \compact('banners'));
    }

    protected function create(Request $request)
    {

        // dd($request->pic);

        $document = $request->pic;
        if (isset($document) && !empty($document)) {
            $new_name = date('d-m-Y-H-i-s') . '_' . $document->getClientOriginalName();
            // $new_name = '/images/'.$image.'_'.date('d-m-Y-H-i-s');
            $document->move(public_path('/files/banner/'), $new_name);
            $file = 'files/banner/' . $new_name;
        }

        Banner::create([
            'name' => $request->name,
            'description' => $request->description,
            'course_id' => 1,
            'banner_image' => $file
        ]);

        return response()->json(['status'=>1]);
    }

    protected function active(Request $request) {
        $banner = Banner::find($request->catId);
        $banner->is_activate = $request->active;
        $banner->save();
    }

    protected function editBanner($id) {
       $main_id = \Crypt::decrypt($id);

       $banner = Banner::find($main_id);

       return view('admin.master.banner.edit',\compact('banner'));

    }
}
