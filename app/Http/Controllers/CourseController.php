<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Course;

class CourseController extends Controller
{
    public function index(){
         
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }
    public function show()
    {
        
        return view('teacher.index', [
            'courses' => Course::all(),
            // where('teacher_id' == auth()->user()->id)
        ]);
    }

    public function create()
    {
        return view('teacher.create');
    }

    public  function store(Request $request)
    { 
        //create part.
        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'cover_img' => $request->cover_img,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'teacher_id' => auth()->user()->id,
            'supporter_id' => $request->supporter_id,
            ]);

        return redirect()->route('teacher.index');
    }

    public function view($course)
    {   
        

        return view('courses.view',[
            'course'=>Course::find($course),
        
        ]);
    }

}
