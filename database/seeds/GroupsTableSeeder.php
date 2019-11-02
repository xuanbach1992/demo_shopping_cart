<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group();
        $group->id=1;
        $group->name = "C0819H1";
        $group->description = "khai giang thang 8/2019";
        $group->save();
        $group->teachers()->attach([1,2]);

        $group = new Group();
        $group->id=2;
        $group->name = "C0719H1";
        $group->description = "khai giang trong thang 7/2019";
        $group->save();
        $group->teachers()->attach([2]);

        $group = new Group();
        $group->id=3;
        $group->name = "C01009H1";
        $group->description = "khai giang trong thang 10/2019";
        $group->save();
        $group->teachers()->attach([1]);

    }
}
