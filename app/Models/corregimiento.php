<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corregimiento extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    protected $table = 'Corregimiento';

    protected $primaryKey = 'id_corregimiento';
}