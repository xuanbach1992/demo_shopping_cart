<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }
    public function show(){
        $teachers=$this->teacher->all();
        return view('teacher.list',compact('teachers'));
    }
}
