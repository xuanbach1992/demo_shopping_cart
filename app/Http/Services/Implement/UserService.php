<?php


namespace App\Http\Services\Implement;


use App\Http\Repositories\UserRepositoryInterface;
use App\Http\Services\UserServiceInterface;
use App\User;
use Illuminate\Support\Facades\File;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function show()
    {
        return $this->userRepository->getAll();
    }

    function success($request)
    {
        $obj = new User();
        $obj->name = $request->name;
        $obj->phone = $request->phone;
        $obj->email = $request->email;
        $obj->group_id = $request->group;
        $image = $request->file('image');
        $path = $image->store('upload', 'public');
        $obj->image = $path;

        $this->userRepository->update($obj);
    }

    function getById($id)
    {
        return $this->userRepository->findById($id);
    }

    function update($id,$request)
    {
        $obj = $this->userRepository->findById($id);
        if (file_exists(storage_path("/app/public/$obj->image"))) {
            File::delete(storage_path("/app/public/$obj->image"));
            $image = $request->file('image');
            $path = $image->store('upload', 'public');
            $obj->image = $path;
        }
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->group_id = $request->group;
        $this->userRepository->update($obj);
    }

    function delete($id)
    {
        $obj = $this->userRepository->findById($id);
        if (file_exists(storage_path("/app/public/$obj->image"))) {
            File::delete(storage_path("/app/public/$obj->image"));
        }
        $this->userRepository->destroy($obj);
    }

    function search($request)
    {
        return $this->userRepository->search($request);
    }

}
