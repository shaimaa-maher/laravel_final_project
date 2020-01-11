<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{
    protected $table = 'users';

    public function supporter()
    {
        return $this->hasMany('App\Supporter');
    }

    public function course()
    {
        return $this->hasMany('App\Course');
    }
}
