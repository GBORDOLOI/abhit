<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function addTimeTable(Request $request){
        return view('admin.time-table.add-time-table');
    }
}
