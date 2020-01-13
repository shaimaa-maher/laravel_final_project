<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


    public function create()
    {
        return view('users.create');

       
    }

    function store(Request $request)
    {
       
                
         if(request()->has('avatar')){
            $user = new User;

            // $file = $request->file('avatar');
            // //make sure yo have image folder inside your public
            // $destination_path = '/home/esraa/Desktop/project_laravel/public/bower_components/AdminLTE/dist/img/';
            // $profileImage = date("Ymd").".".$file->getClientOriginalName();
            // $file->move($destination_path, $profileImage);
            // //save the link of thumbnail into myslq database        
            // $user->avatar_url = $destination_path . $profileImage;
          
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role =$request->role;
            $user->password = Hash::make($request->password);
        
            $user->save();
            
        }
        return User::create([
           
            $user->name = $request->name,
            $user->email = $request->email,
            $user->role =$request->role,
            $user->password = Hash::make($request->password),
        ]);
        return redirect()->route('users.index');
    }


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
          'user'=>$user
      ]);
    }

    function update(User $user,Request $request){
        $user->name= $request->name;
        $user->email= $request->email;
        $user->avatar_url= $request->avatar;

        $user->save();
        return redirect()->route('users.index');
    }

    function destroy($user){
        
        $delte =(User::where('id','=',$user)->first())->delete();
         return redirect()->route('users.index');
    }



    public function show($user)
    {
        $user = User::find($user);
      return view('users.view',[
          'user'=>$user
      ]);
      }

}



// return User::create([
//     'name' => $data['name'],
//     'email' => $data['email'],
//     'password' => Hash::make($data['password']),
//     'role' =>$data['role'],
//     'avatar_url'=> 'bower_components/AdminLTE/dist/img/'.$avatar_name,
// ]);