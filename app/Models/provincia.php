<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Provincia';

    protected $primaryKey = 'id_Provincia';
}