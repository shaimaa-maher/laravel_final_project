<?php

namespace App\Http\Controllers;
use App\Course;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('adminCourses.index',[
            'courses' => Course::paginate(3)
        ]);
    }

    function create()
    {
        return view('adminCourses.create',[
            'users' => User::all()->where('role','<>','admin')
        ]);
    }

    function store(Request $request)
    {   
        $course = new Course;
        $course->name = $request->name;
        $course->price = $request->price;
        $course->cover_img = $request->cover_img;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $course->teacher_id = $request->teacher;
        $course->supporter_id = $request->supporter;
        $course->save();
        return redirect()->route('adminCourses.index');
    }

    function edit($course)
    {
        $course = Course::find($course);
         return view('adminCourses.edit',[
             'course' => $course
         ]);
    }

    

   
}


