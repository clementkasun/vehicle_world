<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model
{
    use HasFactory;
    
    public function Vehicle(){
        return $this->hasMany(Vehicle::class);
    }
    
    public function SparePart(){
        return $this->hasMany(SparePart::class);
    }
}
