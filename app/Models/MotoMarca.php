<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoMarca extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Moto_Marca';

    protected $primaryKey = 'id';
}
