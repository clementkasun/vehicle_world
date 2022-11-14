<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_desc',
        'user_star',
        'post_id',
        'user_id',
        'img_one',
        'img_two',
        'img_three',
        'img_four',
        'created_at',
        'updated_at'
    ];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Post(){
        return $this->belongsTo(Post::class);
    }
}
