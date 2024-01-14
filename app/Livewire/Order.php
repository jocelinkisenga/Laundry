<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Date;

class Order extends Component
{
    public string $code;

    public $orders;

    public $shulleldArray = ['A', 'b', 'C', 'd'];

    public function render()
    {
        $this->orders = \App\Models\Order::latest()->get();
        return view('livewire.order');
    }

    public function generateCode(){
        $this->code = '#' . date('Y-m-d') . rand(1, 1000);
    }

    public function store(){
        \App\Models\Order::create([
            'code' => $this->code
        ]);
    }
}
