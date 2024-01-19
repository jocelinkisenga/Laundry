<?php

namespace App\Livewire;

use Livewire\Component;

class CreateOrderList extends Component
{

    public ?string $name;

    public ?string $description;

    public int $orderId;
    public function render()
    {
        return view('livewire.create-order-list');
    }

    public function store(){

    }


}
