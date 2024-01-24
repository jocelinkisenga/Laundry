<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
         * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->foreignId('user_id')->nullable();
            $table->bigInteger('price')->nullable();
            $table->boolean('status')->default(false);
            $table->string("room_name")->nullable();
            $table->string("client_name")->nullable();
            $table->string("phone")->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
