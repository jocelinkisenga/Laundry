<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id'
    ];

    public function role() : BelongsTo {
        return $this->belongsTo(Role::class);
    }

    public function user () : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
