<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KnowledgeForumPost;
use Illuminate\Support\Facades\Auth;
use App\Common\Activation;

class KnowledgeForumPostController extends Controller
{
    public function addKnowledgeQuestion(Request $request){
       
        $question = $request->question;
        $description = $request->description;
        $link  = $request->link;

        $request->validate([
            'question' => 'required',
            'description' => 'required',
        ]);

        
        $create = KnowledgeForumPost::create([
            'question' => $question,
            'description' => $description,
            'links' => $link,
            'user_id' => Auth::user()->id,
            'is_activate' => Activation::Activate,
        ]);

        if($create){
            return response()->json(['message' => 'Question added successfully']);
        }else{
            return response()->json(['message' => 'Oops! Something went wrong']);
        }
    }
}
