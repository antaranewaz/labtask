<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function login() {
        return $this->hasMany('App\Models\Photo');
    }
}
