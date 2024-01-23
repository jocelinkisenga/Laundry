<?php

namespace App\Livewire;

use App\Services\ProductService;
use Livewire\Component;

class CreateOrderList extends Component
{

    public ?string $name;
    public ?string $description;
    public int $orderId;
    public $products;

    public function render(ProductService $productService)
    {
        $this->products = $productService->getAll($this->orderId);
        return view('livewire.create-order-list');
    }

    public function store(ProductService $productService)
    {
        $productService->storeProduct($this->name, $this->description, $this->orderId);
    }

    public function delete(int $productId)
    {
        dd($productId);
        // $productService->deleteProduct($productId);
    }
}
