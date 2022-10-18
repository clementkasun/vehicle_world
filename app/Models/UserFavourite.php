<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavourite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path',
        'address',
        'contact_no'
    ];

    
}
