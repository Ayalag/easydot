<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoTipo extends Model
{
    use HasFactory;

    protected $table = 'Moto_Tipo';

    protected $primaryKey = 'id';
}
