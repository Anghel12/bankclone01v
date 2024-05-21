<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockedFollow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blocked_user_id',
        'blocked_at',
        'unblocked_at',
        'reason'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blockedUser()
    {
        return $this->belongsTo(User::class, 'blocked_user_id');
    }
}
