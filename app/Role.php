<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    Public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
