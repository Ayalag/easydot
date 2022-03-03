<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfoDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'user_info_detail';

    public function user(){

        return $this->belongsTo(User::class);

   }
}
