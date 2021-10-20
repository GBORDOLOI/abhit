<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MultipleChoice;

class MultipleChoiceController extends Controller
{
    public function index(Request $request){
        $getMultipleChoice = MultipleChoice::with('subject')->distinct()->get(['subject_id', 'is_activate']);
        return view('admin.multiple-choice.multiple-choice')->with('getMultipleChoice', $getMultipleChoice);
    }

    public function addMultipleChoice(Request $request){
        return view('admin.multiple-choice.add-multiple-choice');
    }

    public function insertMultipleChoice(Request $request){
        $subject_id = $request->subject_id;
        $question = $request->question;
        $answer1 = $request->answer1;
        $answer2 = $request->answer2;
        $answer3 = $request->answer3;
        $answer4 = $request->answer4;

        foreach($question as $key =>$value){
            foreach($answer1 as $key1 => $value1){
                foreach($answer2 as $key2 => $value2){
                    foreach($answer3 as $key3 => $value3){
                        foreach($answer4 as $key4 => $value4){
                            if($key == $key1 && $key1 == $key2 && $key2 == $key3 && $key3 == $key4){
                                $data['subject_id'] = $subject_id;
                                $data['question'] = $value;
                                $data['answer_1'] = $value1;
                                $data['answer_2'] = $value2;
                                $data['answer_3'] = $value3;
                                $data['answer_4'] = $value4;
                                $data['is_activate'] = 1;
                                $insertingData[] = $data;
                            }
                            
                        } 
                    }
                } 
            } 
        }

        MultipleChoice::insert($insertingData);
        return back()->withSuccess(['message' => "MCQ's Added Successfully"]);
    }


    public function isActivateMultipleChoice(Request $request){
        MultipleChoice::where('subject_id' ,$request->subject_id)->update([ 'is_activate' => $request->active, ]);
        return response()->json(['message' => 'MCQ status updated successfully']);
    }


    public function startMcq(Request $request, $id){
        $startMcq = MultipleChoice::where('subject_id', $id)->simplePaginate(5);
        return back()->with('startMcq',  $startMcq);
    }
}
