<?php

namespace App\Livewire;

use App\Services\ProductService;
use Livewire\Component;

class Dashboard extends Component
{
    public $productsDashboard;
    public function render(ProductService $productService)
    {

        $this->productsDashboard = $productService->productByOrder();
        return view('livewire.dashboard');
    }



    public function order(int $customerId){
        dd($customerId);
    }
}
