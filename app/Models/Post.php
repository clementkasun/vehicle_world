<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $fillable = array('post_title', 'price', 'additional_info', 'location', 'address', 'condition','post_type', 'main_image', 'image_one', 'image_two', 'image_three', 'image_four', 'image_five', 'vehicle_id', 'spare_part_id', 'user_id', 'status');

    public function SparePart() {
        return $this->belongsTo(SparePart::class);
    }

    public function Vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function UserFavourite() {
        return $this->hasOne(UserFavourite::class);
    }
}
