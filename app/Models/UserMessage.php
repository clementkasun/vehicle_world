<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_from_id',
        'user_to_id',
        'message',
        'created_at',
        'updated_at',
        'read_at'
    ];

    public function User() {
        return $this->belongsTo(User::class, 'user_from_id');
    }
}
