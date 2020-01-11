<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            'users' => User::paginate(3)
        ]);
    }

    function destroy($user){
        
        $delte =(User::where('id','=',$user)->first())->delete();
         return redirect()->route('admin.index');
    }
}
