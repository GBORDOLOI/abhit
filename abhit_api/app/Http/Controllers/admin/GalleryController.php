<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //
    protected function index()
    {
        return view('admin.master.gallery.gallery');
    }

    protected function create(Request $request) {

        $document = $request->pic;
        if (isset($document) && !empty($document)) {
            $new_name = date('d-m-Y-H-i-s') . '_' . $document->getClientOriginalName();
            // $new_name = '/images/'.$image.'_'.date('d-m-Y-H-i-s');
            $document->move(public_path('/files/gallery/'), $new_name);
            $file = 'files/gallery/' . $new_name;
        }

        Gallery::create([
            'name' => $request->name,
            'gallery' => $file
        ]);

        return response()->json(['status'=>1]);
    }
}
