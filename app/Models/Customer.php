<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
protected $fillable = [
    'name',
    'company_id',
    'room_name',
    'email',
    'phone',
    'adresse'
];


}
