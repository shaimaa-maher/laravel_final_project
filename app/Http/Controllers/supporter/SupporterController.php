<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Supporter;

class SupporterController extends Controller
{
   
    public function index()
    {
        // $teacher_row = Supporter::find(auth()->user()->id);
        return view('supporters.index', [
            'supporters' => Supporter::all(),
        ]);
    }


    public function create()
    {
        return view('supporters.create');
    }


    public function store(Request $request)
    {

        //create part.
        Supporter::create([
            'national_id' => $request->national_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'avatar_url' => $request->avatar_url,
            'course_id' => $request->course_id,
            'role'=>'supporter',
            'teacher_id' => auth()->user()->id,
            
        ]);

        return redirect()->route('supporters.index');
    }
}
