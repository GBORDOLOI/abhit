<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KnowledgeForumComment;
use App\Models\KnowledgeForumPost;
use App\Models\User;

class KnowledgeForumCommentsController extends Controller
{
    public function knowledgeComment(Request $request){

        $comment = $request->comment;

        $request->validate([
            'comment' => 'required'
        ]);
        $is_activate = User::where('id',$request->commented_by)->first();

        $create = KnowledgeForumComment::create([
            'knowledge_forum_post_id' => $request->post_id,
            'comments' => $comment,
            'user_id' => $request->commented_by,
            'is_activate' => $is_activate->is_activate,
        ]);

        $total_comments = KnowledgeForumComment::where('knowledge_forum_post_id', $request->post_id)->count();
        KnowledgeForumPost::where('id', $request->post_id,)->update(['total_comments' => $total_comments]);

        if($create){
            return back()->with(['comment_posted' => 'Comment added successfully']);
        }else{
            return back()->with(['comment_error' => 'Oops! something went wrong. Not able to Comment']);
        }
    }
}
