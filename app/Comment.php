<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body', 'cource_id', 'supporter_id','student_id',
    ];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

}
