<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    protected $fillable = ['id','number_plate', 'capacity','model','route_id'];

}
