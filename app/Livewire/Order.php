<?php

namespace App\Livewire;

use Livewire\Component;

class Order extends Component
{
    public string $code;
    
    public function render()
    {
        return view('livewire.order');
    }
}
