<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Date;
use Livewire\Component;

class Order extends Component
{
    public string $code;

    public $orders;

    public $shulleldArray = ['A', 'b', 'C', 'd'];

    public function render()
    {
        $this->orders = Order::latest()->get();
        return view('livewire.order');
    }

    public function generateCode(){
        $this->code = '#' . date('Y-m-d') . rand(1, 1000);
    }
}
