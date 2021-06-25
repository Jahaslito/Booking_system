<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    protected $fillable=[
        'id',
        'source',
        'destination',
        'price',
    ];
}
