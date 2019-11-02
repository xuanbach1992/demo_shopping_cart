<?php


namespace App\Http\Services\Implement;


use App\Http\Repositories\GroupRepositoryInterface;

class GroupService implements GroupServiceInterface
{
    protected $groupRepository;

    public function __construct(GroupRepositoryInterface $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
    function show(){
        return $this->groupRepository->getAll();
    }

    function success($obj)
    {
        // TODO: Implement success() method.
    }

    function update($id, $obj)
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
