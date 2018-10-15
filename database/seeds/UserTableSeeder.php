<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_employee = Role::where('name', 'admin')->first();
	    $role_manager  = Role::where('name', 'editor')->first();

	    $employee = new User();
	    $employee->name = 'Admin Name';
	    $employee->email = 'admin@example.com';
	    $employee->password = bcrypt('123456');
	    $employee->save();
	    $employee->roles()->attach($role_employee);

	    $manager = new User();
	    $manager->name = 'Editor Name';
	    $manager->email = 'editor@example.com';
	    $manager->password = bcrypt('123456');
	    $manager->save();
	    $manager->roles()->attach($role_manager);
    }
}
