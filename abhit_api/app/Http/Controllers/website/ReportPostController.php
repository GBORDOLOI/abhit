<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportPost;
use App\Models\KnowledgeForumPost;
use Illuminate\Support\Facades\Auth;

class ReportPostController extends Controller
{
    public function reportPost(Request $request){
        $postId = $request->postId;
        $getPost = ReportPost::where('knowledge_forum_post_id', $postId)->first();
        if($getPost == null){
            ReportPost::create([
                'knowledge_forum_post_id' => $postId,
                'report_count' => 1,
            ]);
        }else{
            ReportPost::where('knowledge_forum_post_id' ,$postId)->update([
                'report_count' => $getPost->report_count + 1,
            ]);
        }
        return response()->json(['success' => 'Post reported successfully.']);
        
    }

    public function getReportedPost(Request $request){
        $reportedPosts = ReportPost::all();
        return view('admin.report.reported-post')->with(['reportedPosts' => $reportedPosts]);
    }

    public function moveToTrash(Request $request){
        $postId = $request->postId;
        $removeFromKnowledgePost = KnowledgeForumPost::where('id',$postId)->delete();
        $removeFromReportPost = ReportPost::where('knowledge_forum_post_id',$postId)->delete();
        if($removeFromKnowledgePost && $removeFromReportPost){
            return response()->json(['success' => 'Post move to trash successfully']);
        }else{
            return response()->json(['error' => 'Oops!, something went wrong']);
        }
    }
}
