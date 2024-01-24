<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

protected $fillable = [
    'code',
    'user_id',
    'price',
    'status',
    'room_name',
    'client_name',
    'phone'
];

protected $casts = [
    'status' => 'boolean',
];



    public function products(){
        return $this->hasMany(Product::class);
    }

}
