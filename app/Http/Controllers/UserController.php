<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Services\Implement\GroupServiceInterface;
use App\Http\Services\UserServiceInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    protected $groupService;

    public function __construct(UserServiceInterface $userService, GroupServiceInterface $groupService)
    {
        $this->userService = $userService;
        $this->groupService = $groupService;
    }

    public function show()
    {
        $users=  $this->userService->show();
        $groups=$this->groupService->show();
        return view("user.list", compact('users','groups'));
    }

    public function create()
    {   $groups=$this->groupService->show();
        return view("user.create",compact("groups"));
    }

    public function success(Request $request)
    {
        $this->userService->success($request);
        return redirect()->route("users.list");
    }

    public function edit($id)
    {
        $user = $this->userService->getById($id);
        $groups=$this->groupService->show();
        return view("user.edit", compact("user",'groups'));
    }

    public function update($id, Request $request)
    {
      $this->userService->update($id,$request);
        return redirect()->route("users.list");
    }

    public function destroy($id)
    {
       $this->userService->delete($id);
        return redirect()->route("users.list");
    }

    public function search(Request $request)
    {
        $keySearch = $request->get('search');
        $users = $this->userService->search($keySearch);
        return view('user.list', compact('users'));

    }
}
