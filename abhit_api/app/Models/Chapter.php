<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'chapters';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    // protected function getCourse(){
    //     return $this->belongsTo(Course::class,'course_id','id');
    // }
}
