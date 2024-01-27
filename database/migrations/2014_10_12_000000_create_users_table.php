<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->boolean("permis_status")->nullable();
            $table->string("phone")->nullable();
            $table->integer('role_id');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        User::create([
            'name' => "jocelin kisenga",
            'email' => "kisenga@gmail.com",
            'password' => Hash::make('jocelin kisenga'),
            'permis_status' => true,
            'phone' => "0991161449",
            'role_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
