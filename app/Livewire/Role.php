<?php

namespace App\Livewire;

use App\Models\Role as ModelsRole;
use App\Services\RoleService;
use Livewire\Component;

class Role extends Component
{

    public $roles;
    public string $name;
    public function render(RoleService $roleService)
    {
        $this->roles = $roleService->getAll();
        return view('livewire.role');
    }

    public function store(RoleService $roleService){
        $roleService->store($this->name);

        flash()->addSuccess('role ajoute avec success');
    }
}
