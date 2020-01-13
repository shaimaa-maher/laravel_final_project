<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class TeacherCoursesController extends Controller
{
    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all(),
        ]);
    }
    
    public function create()
    {
        return view('courses.create', [
            'users' => User::all()->where('role', '<>', 'admin')
        ]);
    }
    public function store(Request $request)
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
        return redirect()->route('courses.index');
    }
    public function view($course)
    {
        return view('courses.view', [
            'course' => Course::find($course),
        ]);
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', ['course' => $course]);
    }
    
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->price = $request->price;
        $course->cover_img = $request->cover_img;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $course->teacher_id = auth()->user()->id;
        $course->supporter_id = $request->supporter_id;
        $course->update([
            'name' => $request->name,
            'price' => $request->price,
            'cover_img' => $request->cover_img,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'teacher_id' => auth()->user()->id,
            'supporter_id' => $request->supporter_id
        ]);
        return redirect()->route('courses.index');
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
