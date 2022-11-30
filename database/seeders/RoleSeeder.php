<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $Role = new Role();
        $Role->name = 'Admin';
        $Role->save();

        $Role = new Role();
        $Role->name = 'Manager';
        $Role->save();

        $Role = new Role();
        $Role->name = 'User';
        $Role->save();


    }
}
