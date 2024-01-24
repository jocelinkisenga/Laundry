<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Role;
use App\Models\RoleUser;
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

    public function render(UserService $userService)
    {
        $this->roles = Role::all();
        $this->users = $userService->getAll();
        return view('livewire.user');
    }

    public function store(UserService $userService){
        $this->user = $userService->store();

        $this->userRole($this->user->id, $this->role_id);

           flash()->addSuccess('utilisateur ajoute avec success');
    }

    private function userRole(int $userId, int $roleId){
        RoleUser::create([
          "user_id" => $userId,
          "role_id" => $roleId
        ]);
    }

}
