<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultipleChoiceController extends Controller
{
    public function index(Request $request){
        return view('admin.multiple-choice.multiple-choice');
    }

    public function addMultipleChoice(Request $request){
        return view('admin.multiple-choice.add-multiple-choice');
    }
}
