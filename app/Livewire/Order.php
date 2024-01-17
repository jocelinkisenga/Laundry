<?php

namespace App\Livewire;

use App\Http\Requests\StoreOrderRequest;
use Livewire\Component;
use App\Services\OrderService;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Date;

class Order extends Component
{
    public string  $code;

    public $orders;

    public $orderService;




    public function render(OrderService $orderService)
    {
        $this->orders = $orderService->getAll();
        return view('livewire.order');
    }

    public function generateCode(OrderService $orderService)
    {
        $this->code = $orderService->codeGenerate();
    }

    public function store(OrderService $orderService)
    {

        $orderService->store($this->code);
    }
}
