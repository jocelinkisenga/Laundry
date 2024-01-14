<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("admin")->group(function () {

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

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
