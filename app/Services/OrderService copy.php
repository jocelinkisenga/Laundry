<?php
declare(strict_types=1);

namespace App\Services;


use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ProductService {


    public function getAll() : Collection {
        return Product::latest()->get();
    }

    public function store(collection $data) {
       Product::create([
            'code' => $data->code,
            'user_id' => Auth::user()->id
        ]);

    }

    public function show(?int $OrderId){
        return Product::whereId($OrderId)->first();

    }


}
