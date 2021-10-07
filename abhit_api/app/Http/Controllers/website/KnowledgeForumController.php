<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KnowledgeForumPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class KnowledgeForumController extends Controller
{
    public function index(Request $request){
        $knowledge_post = KnowledgeForumPost::with('user')->orderBy('created_at', 'desc')->simplePaginate(3);
        $top_knowledge_post = KnowledgeForumPost::with('user')->orderBy('created_at', 'desc')->limit(3)->get();
        $total_questions = '';
        if(Auth::check()){
            $total_questions = KnowledgeForumPost::where('user_id',Auth::user()->id)->count();
        }
        return view('website.knowledge.knowledge_forum')->with(['knowledge_post' => $knowledge_post, 'top_knowledge_post' =>  $top_knowledge_post, 'total_questions' => $total_questions ]);
    }

    public function knowledgeDetailPost($id){
        $post_id =  \Crypt::decryptString($id);
        $knowledge_post = KnowledgeForumPost::where('id',$post_id)->with('user')->first();
        $total_questions = '';
        if(Auth::check()){
            $total_questions = KnowledgeForumPost::where('user_id',Auth::user()->id)->count();
        }
        return view('website.knowledge.knowledge_details_post')->with(['knowledge_post' => $knowledge_post, 'total_questions' => $total_questions]);
    }
}
