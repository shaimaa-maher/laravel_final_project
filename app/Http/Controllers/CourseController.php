<?php

namespace App\Http\Controllers;
use App\Course;
use App\User;


use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index',[
            'courses' => Course::paginate(10),
        ]);
    }

    function create()
    {
        $teacheres = (User::where('role','=','teacher'))->get();
         $supporteres=(User::where('role','=','supporter'))->get();
        //  dd($supporteres);
        return view('courses.create',[
            'teacheres' =>$teacheres,
            'supporteres'=>$supporteres

        ]);
    }

    function store(Request $request,User $user)
    {
        $teacher_name=(User::where('id','=',$request->teacher_id))->pluck('name')->first();
        $supporter_name=(User::where('id','=',$request->supporter_id))->pluck('name')->first();
                
        Course::create([
        'name'=> $request->name,
        'price'=> $request->price,
        'start_date'=>$request->start_date,
        'end_date'=> $request->end_date,
        'cover_img'=> $request->cover_img,
        'teacher_id'=>$request->teacher_id,
        'teacher_name'=> $teacher_name,
        'supporter_id'=> $request->supporter_id,
        'supporter_name'=> $supporter_name,

        ]);
        return redirect()->route('courses.index');
    }

    public function edit($course ,User $user)
    {
        $course = Course::find($course);
        $teacheres = (User::where('role','=','teacher'))->get();
        $supporteres=(User::where('role','=','supporter'))->get();
        
      return view('courses.edit',[
          'course'=>$course,
          'teacheres' =>$teacheres,
          'supporteres'=>$supporteres
      ]);
    }

    function update(Course $course,Request $request){
        $course->teacher_name=(User::where('id','=',$request->teacher_id))->pluck('name')->first();
        $course->supporter_name=(User::where('id','=',$request->supporter_id))->pluck('name')->first();
        $course->name= $request->name;
        $course->price= $request->price;
        $course->start_date= $request->start_date;
        $course->end_date= $request->end_date;
        $course->cover_img= $request->cover_img;
        $course->teacher_id= $request->teacher_id;
        $course->supporter_id= $request->supporter_id;
    
        $course->save();
        return redirect()->route('courses.index');
    }

    function destroy($course){
        
        $delete =(Course::where('id','=',$course)->first())->delete();
         return redirect()->route('courses.index');
    }



    public function show($course)
    {
        $course = Course::find($course);
      return view('courses.view',[
          'course'=>$course
      ]);
      }

}
