<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    public function run()
    {
       $admin= \App\Role::create([
           'name' => 'Admin'
       ]);
       $admin->save();
    }
}
