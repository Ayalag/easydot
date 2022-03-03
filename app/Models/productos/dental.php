<?php

namespace App\Models\productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dental extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Planes_Dentales';
}
