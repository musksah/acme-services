<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'plate', 
        'color',
        'brand',
        'type_vehicle',
        'owner_id',
        'driver_id',
    ];

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    public function driver(){
        return $this->belongsTo(Driver::class);
    }
}
