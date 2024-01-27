<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;

class UserService
{

    private bool $permisStatus = false;

    public function getAll(): Collection
    {
        return User::latest()->get();
    }

    public function store(?string $name, ?string $email, string $phone)
    {
        return   User::create([
            "name" => $name,
            "email" => $email,
            "password" => Hash::make("laundry service"),
            "permis_status" => $this->permisStatus,
            "phone" => $phone
        ]);
    }

    public function show(?int $userId)
    {
        return User::whereId($userId)->first();
    }

    public function setPermission(int $userId){
        $user = User::findOrFail($userId);
        $user->update([
            "permis_status" => true
        ]);
    }

    public function unsetPermission(int $userId)
    {
        $user = User::findOrFail($userId);
        $user->update([
            "permis_status" => false
        ]);
    }
}
