<?php

namespace App\Models\productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Planes_Personas';
}