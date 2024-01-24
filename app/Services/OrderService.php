<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class OrderService {

  
    public function getAll() : Collection {
        return Order::latest()->withCount("products")->get();
    }

    public function store( ?string $clientname, ?string $roomName, string $phone) {
      return Order::create([
            'code' => $this->codeGenerate(),
            'user_id' => Auth::user()->id,
            'client_name' => $clientname,
            'room_name' => $roomName,
            'phone' => $phone
        ]);

    }

    public function show(?int $OrderId){
        return Order::whereId($OrderId)->first();

    }


    protected function codeGenerate(){

        return '#' . date('Y-m-d') . rand(1, 1000);
    }
}
