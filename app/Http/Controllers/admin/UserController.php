<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    public function index()
    {
        return view('posts.index',[
            'users' => User::paginate(3)
        ]);
    }
}
