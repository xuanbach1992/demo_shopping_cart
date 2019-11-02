<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teacher";

    public function groups()
    {
        return $this->belongsToMany('App\Group',"group_teacher","teachre_id","group_id");
    }
}
