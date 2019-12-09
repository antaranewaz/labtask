<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function Login() {
        return $this->belongsTo('App\Models\Registration');
    }
}
