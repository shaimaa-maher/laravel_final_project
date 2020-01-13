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


    public function edit($id)
    {
        $course = Supporter::find($id);
        return view('supporters.edit', ['supporter' => $course]);
    }


      
    public function update(Request $request, $id)
    {
        $supporter = Supporter::find($id);

        $supporter->national_id = $request->national_id;
        $supporter->name = $request->name;
        $supporter->email = $request->email;
        $supporter->password = $request->password;
        $supporter->avatar_url = $request->avatar_url;
        $supporter->teacher_id = auth()->user()->id;
        $supporter->course_id = $request->course_id;

        $supporter->update([
            'national_id' => $request->national_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'avatar_url' => $request->avatar_url,
            'teacher_id' => auth()->user()->id,
            'course_id' => $request->course_id
        ]);
        return redirect()->route('supporters.index');
    }


    public function delete($id)
    {
        Supporter::where('id', $id)->delete();
        return redirect()->route('supporters.index');
    }
}
