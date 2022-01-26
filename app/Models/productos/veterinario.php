<?php

namespace App\Models\productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veterinario extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Planes_Veterinarios';
}