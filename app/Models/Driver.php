<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'dni_id', 
        'first_name',
        'middle_name',
        'surnames',
        'address',
        'phone_number',
        'city',
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
