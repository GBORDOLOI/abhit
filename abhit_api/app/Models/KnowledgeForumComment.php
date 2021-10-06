<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KnowledgeForumComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="knowledge_forum_comments";
    protected $fillable = [ 'knowledge_forum_post_id', 'comments', 'commented_by', 'is_activate', ];
}
