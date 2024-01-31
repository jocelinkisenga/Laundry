<?php

declare(strict_types=1);

namespace App\Services;

use Darryldecode\Cart\Facades\CartFacade;



class OrderBasketService {
    public function initBasket($customerId) {

        session()->put("customer_id", $customerId);
    }

    public function addProductToBasket(){

    }
    public function removeProductFromBasket() {

    }

    public function confirmBasket() {

    }

    public function cancelBasket() {

    }
}
