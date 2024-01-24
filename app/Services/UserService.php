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

    public function show(?int $OrderId)
    {
        return Order::whereId($OrderId)->first();
    }


    protected function codeGenerate()
    {

        return '#' . date('Y-m-d') . rand(1, 1000);
    }
}
