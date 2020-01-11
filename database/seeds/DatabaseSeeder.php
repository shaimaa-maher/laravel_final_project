<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'role'=> 'admin',
        ]);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'teacher']);
        Role::create(['name'=>'supporter']);

        $delete_user = Permission::create(['name'=>'delete user']);
        //teacher permissions
        $crud_courses= Permission::create(['name'=>'CRUD course']);
        $crud_supporter = Permission::create(['name'=>'CRUD supporter']);
        //supporter permissions
        $aprove_comment = Permission::create(['name'=>'aprove-dis comment']);


        $admin_role = Role::findById(1);
        $admin_permissions = Permission::all();
        $admin_role->givePermissionTo($admin_permissions);


        $teacher_role =  Role::findById(2);
        $teacher_permissions = Permission::all()->where('id','<>',1)->where('id','<>',4);
        $teacher_role->givePermissionTo($teacher_permissions);

        $supporter_role = Role::findById(3);
        $supporter_permission = Permission::all()->where('id','=',4);
        $supporter_role ->givePermissionTo($supporter_permission);

        

        return view('home');

        
    }


}
