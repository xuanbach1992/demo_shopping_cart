<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher=new \App\Teacher();
        $teacher->name = "Hoang";
        $teacher->id=1;
        $teacher->phone = "13456";
        $teacher->address = "1234561sadasada";
        $teacher->save();

        $teacher = new \App\Teacher();
        $teacher->id=2;
        $teacher->name = "Luan";
        $teacher->phone = "134321s56";
        $teacher->address = "123wqe4561sadasada";
        $teacher->save();
    }
}
