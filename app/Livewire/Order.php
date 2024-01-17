<?php

namespace App\Livewire;

use App\Http\Requests\StoreOrderRequest;
use Livewire\Component;
use App\Services\OrderService;
use Illuminate\Support\Facades\Date;

class Order extends Component
{
    public string $code;

    public $orders;

    public $orderService;

    public function __construct(){
        $this->orderService = new OrderService();
    }


    public function render()
    {
        $this->orders = $this->orderService->getAll();
        return view('livewire.order');
    }

    public function generateCode()
    {
        $this->code = $this->orderService->codeGenerate();
    }

    public function store(StoreOrderRequest $storeOrderRequest)
    {
        $this->orderService->store($storeOrderRequest);
    }
}
