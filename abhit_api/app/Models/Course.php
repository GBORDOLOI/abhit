<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'courses';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    protected function subject()
    {
        # code...
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

}
