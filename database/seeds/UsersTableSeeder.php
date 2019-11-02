<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->phone = "13456";
        $user->email = "1234561@dsada";
        $user->password = "123";
        $user->group_id = "1";

        $user->save();

        $user = new User();
        $user->name = "anhbach ";
        $user->phone = "13456";
        $user->email = "1234561@dsa";
        $user->password = "123";
        $user->group_id = "2";
        $user->save();
    }
}
