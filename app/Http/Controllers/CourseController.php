<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request\StoreCourseRequest;
use  App\Course;

class CourseController extends Controller
{
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

    public  function store(StoreCourseRequest $request)
    { 
        //create part.
        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'cover_img' => $request->cover_img,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'teacher_id' => $request->teacher_id,
            'supporter_id' => $request->supporter_id,
            ]);

        return redirect()->route('courses.index');
    }
}
