<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'email', 'password','birth_date','profile_image'
    ];
    

    public function course()
    {
        return $this->belongsToMany('App\Course','student_course');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
