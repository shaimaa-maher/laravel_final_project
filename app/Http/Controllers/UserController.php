<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index',[
            'users' => User::paginate(3)
        ]);
    }

    public function edit($user)
    {
        $user = User::find($user);
        return view('users.edit',[
            'user' => $user
        ]);
    }

    function destroy($user){
        
        $delte =(User::where('id','=',$user)->first())->delete();
         return redirect()->route('users.index');
    }
}
