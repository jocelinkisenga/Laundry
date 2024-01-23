<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Role;

class User extends Component
{
    public $users;
    public string $name;
    public string $email;
    private bool $permisStatus = false;
    protected $user;
    public string $phone;
    public int $role_id;
    public $roles;

    public function render()
    {
        $this->roles = Role::all();
        $this->users = ModelsUser::lates()->get();
        return view('livewire.user');
    }

    public function store(){
        $this->user = ModelsUser::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => Hash::make("laundry service"),
            "permis_status" => $this->permisStatus,
            "phone" => $this->phone
        ]);

        $this->userRole($user->id, $this->role_id);
    }

    private function userRole(int $userId, int $roleId){
        
    }

}
