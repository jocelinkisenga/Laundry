<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Database\Eloquent\Collection;

class RoleService
{

    private bool $permisStatus = false;

    public function getAll(): Collection
    {
        return Role::latest()->get();
    }

    public function store(?string $name)
    {
        Role::create(["name" => $name]);
    }

    public function userRole(int $userId, int $roleId)
    {
        RoleUser::create([
            "user_id" => $userId,
            "role_id" => $roleId
        ]);
    }

}
