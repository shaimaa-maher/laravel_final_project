<?php

namespace App\Http\Controllers;
use App\Course;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('adminCourses.index', [
            'courses' => Course::paginate(10)
        ]);
    }

    public function create()
    {
        return view('adminCourses.create', [
            'users' => User::all()->where('role', '<>', 'admin')
        ]);
    }

    public function store(Request $request,User $user)
    {   $teacher_name=(User::where('id','=',$request->teacher_id))->pluck('name')->first();
        $supporter_name=(User::where('id','=',$request->supporter_id))->pluck('name')->first();

        $validatedData = request()->validate([
            'cover_img' => ['sometimes','mimes:jpeg,jpg,png','max:5000']
        ]);

        if (request()->has('cover_img')) {
            $cover_img = request()->file('cover_img');
            $cover_name = time().'.'.$cover_img->getClientOriginalExtension();
            $cover_path = public_path('bower_components/AdminLTE/dist/img/');
            $cover_img->move($cover_path, $cover_name);
            $course = new Course;
            $course->name = $request->name;
            $course->price = $request->price;
            $course->cover_img = 'bower_components/AdminLTE/dist/img/'.$cover_name;
            $course->start_date = $request->start_date;
            $course->end_date = $request->end_date;
            $course->teacher_id = $request->teacher;
            $course->supporter_id = $request->supporter;
            $course->supporter_name = $supporter_name;
            $course->teacher_name = $teacher_name;
            $course->save();
            return redirect()->route('adminCourses.index');
        }
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

       public function edit($course, User $user)
        {
            $course = Course::find($course);
            $teacheres = (User::where('role', '=', 'teacher'))->get();
            $supporteres=(User::where('role', '=', 'supporter'))->get();
        
            return view('adminCourses.edit', [
          'course'=>$course,
          'teacheres' =>$teacheres,
          'supporteres'=>$supporteres
      ]);
        }

    public function update(Course $course, Request $request)
        {
            $course->name= $request->name;
            $course->price= $request->price;
            $course->start_date= $request->start_date;
            $course->end_date= $request->end_date;
            $course->cover_img= $request->cover_img;
            $course->teacher_id= $request->teacher;
            $course->supporter_id= $request->supporter;
            $course->save();
            return redirect()->route('adminCourses.index');
        }

      public  function show($course)
        {
            $course = Course::find($course);
            return view('adminCourses.view', [
          'course'=>$course
      ]);
        }

      public  function destroy($course)
        {
            $delete =(Course::where('id', '=', $course)->first())->delete();
            return redirect()->route('adminCourses.index');
        }
    }
