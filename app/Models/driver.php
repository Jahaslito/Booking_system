<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $fillable = ['user_id', 'name', 'phone_number', 'driver_licence','created_at','updated_at'];
}
