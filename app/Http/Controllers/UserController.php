<?php

namespace App\Http\Controllers;
use App\Exceptions\Handler;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index',[
            'users' => User::paginate(10)
        ]);
    }

    public function create()
    {
        return view('users.create');
       
    }
    function store(Request $request)
    {
        $validatedData = request()->validate([
            'avatar' => ['sometimes','mimes:jpeg,jpg,png','max:5000']
        ]);

          if(request()->has('avatar')){
            $avatar = request()->file('avatar');
            $avatar_name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar_path = public_path('bower_components/AdminLTE/dist/img/');
            $avatar->move($avatar_path,$avatar_name);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role =$request->role;
            $user->password = Hash::make($request->password);
            $user->avatar_url = 'bower_components/AdminLTE/dist/img/'.$avatar_name;
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

    public function show($user)
    {
        $user = User::find($user);
      return view('users.view',[
          'user'=>$user
      ]);
      }


    function destroy($user){
        
        $delte =(User::where('id','=',$user)->first())->delete();
         return redirect()->route('users.index');
    }
}
