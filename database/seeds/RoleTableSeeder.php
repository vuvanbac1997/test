<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_employee = new Role();
	    $role_employee->name = 'admin';
	    $role_employee->description = 'An Employee User';
	    $role_employee->save();

	    $role_manager = new Role();
	    $role_manager->name = 'editor';
	    $role_manager->description = 'An Eitor User';
	    $role_manager->save();

	    $role_user = new Role();
	    $role_user->name = 'user';
	    $role_user->description = 'An Nomal User';
	    $role_user->save();
    }
}
