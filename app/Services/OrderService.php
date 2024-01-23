<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class OrderService {

    protected string $code;
    public function getAll() : Collection {
        return Order::latest()->withCount("products")->get();
    }

    public function store(?string  $code) {
      return Order::create([
            'code' => $code,
            'user_id' => Auth::user()->id
        ]);

    }

    public function show(?int $OrderId){
        return Order::whereId($OrderId)->first();

    }


    public function codeGenerate(){

        return $this->code = '#' . date('Y-m-d') . rand(1, 1000);
    }
}
