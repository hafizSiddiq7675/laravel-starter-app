<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Exception;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {

            User::truncate();

            $user = new User();
            $user->name = "Admin";
            $user->email = "admin@gmail.com";
            $user->password = Hash::make('password');
            $user->email_verified_at = Carbon::now()->toDateTimeString();
            $user->save();


            $user = new User();
            $user->name = "Manager";
            $user->email = "manager@gmail.com";
            $user->password = Hash::make('password');
            $user->email_verified_at = Carbon::now()->toDateTimeString();
            $user->save();

            $user = new User();
            $user->name = "User";
            $user->email = "user@gmail.com";
            $user->password = Hash::make('password');
            $user->email_verified_at = Carbon::now()->toDateTimeString();
            $user->save();





        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
