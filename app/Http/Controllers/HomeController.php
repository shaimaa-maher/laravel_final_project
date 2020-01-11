<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin_role = Role::findById(1);
        $teacher_role =  Role::findById(2);
        $supporter_role = Role::findById(3);

        $user_role = auth()->user()->role;

        if( $user_role == 'admin'){
            auth()->user()->assignRole($admin_role);
        }elseif ($user_role == 'teacher') {
            auth()->user()->assignRole($teacher_role);
        }elseif($user_role == 'supporter') {
            auth()->user()->assignRole($supporter_role);
        }

        return view('home');
    }
    
}
