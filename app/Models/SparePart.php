<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SparePart extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $fillable = array('make_id', 'part_used_in', 'part_category');

    public function Post() {
        return $this->belongsTo(Post::class);
    }

    public function VehicleMake() {
        return $this->belongsTo(VehicleMake::class);
    }

}
