<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroTipo extends Model
{
    use HasFactory;
  
    protected $table = 'Carro_Tipo';

    protected $primaryKey = 'id';
}
