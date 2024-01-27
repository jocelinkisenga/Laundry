<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Role;
use App\Models\RoleUser;
use App\Services\RoleService;
use App\Services\UserService;

class User extends Component
{
    public $users;
    public string $name;
    public string $email;

    public $user;
    public string $phone;
    public int $role_id;
    public $roles;

    public function render(UserService $userService, RoleService $roleService)
    {
        $this->roles = $roleService->getAll();
        $this->users = $userService->getAll();
        return view('livewire.user');
    }

    public function store(UserService $userService, RoleService $roleService){

        $this->user = $userService->store($this->name, $this->email, $this->phone, $this->role_id);

        $roleService->userRole($this->user->id, $this->role_id);

           flash()->addSuccess('utilisateur ajoute avec success');
    }



}
