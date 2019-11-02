<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";
    protected $fillable = ['name','description'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function teachers()
    {
//        return $this->belongsToMany()
        return $this->belongsToMany('App\Teacher',"group_teacher","group_id",'teacher_id');
    }
}
