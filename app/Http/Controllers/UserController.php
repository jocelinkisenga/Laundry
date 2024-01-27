<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(public UserService $userService){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.userlist");
    }

    public function givePermission(int $userId){
        $this->userService->setPermission($userId);
    }

    public function removePermission(int $userId)
    {
        $this->userService->unsetPermission($userId);
    }
}
