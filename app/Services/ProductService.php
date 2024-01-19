<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService {
    public function getAll(int $orderId): Collection {
        return Product::latest()->whereOrderId($orderId)->get();
    }

    public function storeProduct(string $name, string $color){
        Product::create(
            [
                'name' => $name,
                'description'
            ]
            );
    }
}
