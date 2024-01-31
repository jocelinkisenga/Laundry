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
    'status',
    'customer_id'
];



protected $casts = [
    'status' => 'boolean',
];



    public function products(){
        return $this->hasMany(Product::class);
    }

}
