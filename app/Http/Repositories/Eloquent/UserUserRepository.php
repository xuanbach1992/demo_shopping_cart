<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\UserRepositoryInterface;
use App\User;

class UserUserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAll()
    {
        return $this->user->all();
    }

    function update($obj)
    {

        $obj->save();
    }

    function findById($id)
    {
        return $this->user->findOrFail($id);
    }

    function destroy($obj)
    {
        $obj->delete();
    }

    function search($data)
    {
        return $this->user->where('name', 'LIKE', "%$data%")->paginate(15);
    }
}
