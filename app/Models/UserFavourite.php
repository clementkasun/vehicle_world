<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavourite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'created_at',
        'updated_at',
    ];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Post() {
        return $this->belongsTo(Post::class);
    }
}
