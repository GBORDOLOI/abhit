<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KnowledgeForumPost;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\KnowledgeForumComment;

class KnowledgeForumController extends Controller
{
    public function index(Request $request){
        $knowledge_post = KnowledgeForumPost::with('user')->orderBy('created_at', 'desc')->simplePaginate(3);
        $top_knowledge_post = KnowledgeForumPost::with('user')->orderBy('created_at', 'desc')->limit(3)->get();
        $total_post = '';
        $total_post_commented_by_one_user = '';
        $user_details = '';
        if(Auth::check()){
            $total_post = KnowledgeForumPost::where('user_id',Auth::user()->id)->count();
            $total_post_commented_by_one_user = KnowledgeForumComment::where('user_id' , Auth::user()->id)->count();
            $user_details = UserDetails::where('email', Auth::user()->email)->first();
        }
        return view('website.knowledge.knowledge_forum')->with(['knowledge_post' => $knowledge_post, 'top_knowledge_post' =>  $top_knowledge_post, 'total_questions' => $total_post, 'total_knowledge_post_commented_by_one_user' => $total_post_commented_by_one_user, 'user_details' => $user_details]);
    }

    public function knowledgeDetailPost(Request $request, $id){
        $post_id =  \Crypt::decryptString($id);

        $knowledge_post = KnowledgeForumPost::where('id',$post_id)->with('user')->first();
        $increment_views = ($knowledge_post->total_views + 1);
        KnowledgeForumPost::where('id',$post_id)->update(['total_views' => $increment_views ]);
        $total_knowledge_post_views =  KnowledgeForumPost::where('id',$post_id)->first();


        $knowledge_comment = KnowledgeForumComment::with('user')->where('knowledge_forum_post_id',$post_id)->orderBy('created_at', 'desc')->simplePaginate(3);
        $total_post_commented_by_one_user = '';
        $total_knowledge_post = '';
        $total_questions = '';
        $user_details = '';

        if(Auth::check()){
            $total_questions = KnowledgeForumPost::where('user_id',Auth::user()->id)->count();
            $total_post_commented_by_one_user = KnowledgeForumComment::where('user_id' , Auth::user()->id)->count();
            $total_knowledge_post = KnowledgeForumPost::where('user_id' , Auth::user()->id)->sum('user_id');
            $user_details = UserDetails::where('email', Auth::user()->email)->first();
        }
        return view('website.knowledge.knowledge_details_post')->with(['knowledge_post' => $knowledge_post, 'total_questions' => $total_questions, 'knowledge_comment' => $knowledge_comment, 'total_knowledge_post_views' => $total_knowledge_post_views->total_views, 'total_post_commented_by_one_user' => $total_post_commented_by_one_user, 'total_knowledge_post' => $total_knowledge_post, 'user_details' => $user_details]);
    }


    public function knowledgeTab(Request $request){
        $questions_asked_by_user = KnowledgeForumPost::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->simplePaginate(3);
        $user_details = UserDetails::where('email', Auth::user()->email)->first();
        $answered_by_user = KnowledgeForumComment::with('knowledgeForumPost')->where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->simplePaginate(3);
        return view('website.knowledge.knowledge_tab')->with(['questions_asked_by_user' => $questions_asked_by_user, 'user_details' => $user_details, 'answered_by_user' => $answered_by_user]);
    }
}