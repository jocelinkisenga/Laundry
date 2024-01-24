<?php

namespace App\Livewire;

use App\Http\Requests\StoreOrderRequest;
use Livewire\Component;
use App\Services\OrderService;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Date;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Order extends Component
{
    use LivewireAlert;

    public ?string $client_name;
    public ?string $phone;
    public ?string $room_name;
    public $orders;

    public $orderService;

    public function render(OrderService $orderService)
    {
        $this->orders = $orderService->getAll();
        return view('livewire.order');
    }



    public function store(OrderService $orderService)
    {

        $orderService->store( $this->client_name, $this->room_name, $this->phone);

         flash()->addSuccess('commande creee avec succes');




    }
}
