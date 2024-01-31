<?php

declare(strict_types=1);

namespace App\Services;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{

    private int $orderId;
    private int $customer_id;
    public function __construct(public OrderService $orderService)
    {
        $this->customer_id = (int) session()->get("customer_id");
    }
    public function productByOrder(): Collection
    {
        return Order::where("customer_id",$this->customer_id)->with("products")->get();
    }

    public function storeProduct(string $name, string $color)
    {

        $this->orderId = $this->orderService->store()->id;

        if ($this->orderId != null) {
           Product::create(
                [
                    'name' => $name,
                    'description' => $color,
                    'order_id' => $this->orderId
                ]

            );
        }
    }

    public function deleteProduct(int $productId)
    {
        dd($productId);
        Product::destroy($productId);
    }
}
