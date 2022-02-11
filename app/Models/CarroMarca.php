<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroMarca extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Carro_Marca';

    protected $primaryKey = 'id';
}
