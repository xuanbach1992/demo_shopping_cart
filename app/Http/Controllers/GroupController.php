<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function show()
    {
        $groups = $this->group->all();
        return view('group.list', compact('groups'));
    }

    public function showUsersByID($id)
    {
        $group = $this->group->findOrFail($id);
        $users = $group->users;
        $teachers=$group->teachers;
        return view("user.list", compact('users',"teachers"));
    }

    public function destroy($id)
    {
        $this->group->findOrFail($id)->delete();
        return redirect()->route('groups.list');
    }

}
