<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'id',
        'departure',
        'arrival',
        'seats_available',
        'date',
        'route_id',
        'bus_id',
        'driver_id'
    ];
}
