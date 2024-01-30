<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
Use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware("auth")->group(function () {

    Route::get("/users",[UserController::class,"index"])->name("admin.users");
    Route::get("/user",[UserController::class,"create"])->name("admin.user.create");
    Route::post("/user",[UserController::class,"store"])->name("admin.user.store");
    Route::put("/userUpdate",  [UserController::class, "update"])->name("admin.user.update");
    Route::get("/user/{id}",[UserController::class,"show"])->name("admin.user.show");

    Route::get("/roles",[RoleController::class,"index"])->name("admin.roles");
    Route::get("/role",[RoleController::class,"create"])->name("admin.role.create");
    Route::post("/role",[RoleController::class,"store"])->name("admin.role.store");
    Route::put("/roleUpdate",  [RoleController::class, "update"])->name("admin.role.update");
    Route::get("/role/{id}",[RoleController::class,"show"])->name("admin.role.show");

    Route::get("/setPermissiom/{id}", [UserController::class, "givePermission"])->name("user.setPermission");
    Route::get("/unsetPermissiom/{id}", [UserController::class, "removePermission"])->name("user.unsetPermission");

    Route::get("/customers", [CustomerController::class, "create"])->name("customer.create");

});

Route::middleware("auth")->group(function() {

    Route::get("/orders",[OrderController::class,"index"])->name("admin.order");
    Route::get("/order",[OrderController::class,"create"])->name("admin.order.create");
    Route::post("/order",[OrderController::class,"store"])->name("admin.order.store");
    Route::put("/orderUpdate",  [OrderController::class, "update"])->name("admin.order.update");
    Route::get("/order/{id}",[OrderController::class,"show"])->name("admin.order.show");


    Route::get("/product/{id}", [ProductController::class, "create"])->name("admin.product.create");
});

Route::middleware("auth")->group(function () {
    Route::get('/', [DashboardController::class, "index"])->name('dashboard');
});

require __DIR__.'/auth.php';
