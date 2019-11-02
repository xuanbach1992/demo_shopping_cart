<?php


namespace App\Http\Repositories\Eloquent;


use App\Group;
use App\Http\Repositories\GroupRepositoryInterface;

class GroupRepository implements GroupRepositoryInterface
{
    protected $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    function getAll()
    {
        return $this->group->all();
    }

    function findById($id)
    {
        return $this->group->findOrFail($id);
    }

    function update($obj)
    {
        $obj->save();
    }

    function destroy($obj)
    {
        $obj->delete();
    }
}
