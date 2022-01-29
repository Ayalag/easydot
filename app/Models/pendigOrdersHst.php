<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendigOrdersHst extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Pending_orders_Hst';
}