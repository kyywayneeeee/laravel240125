<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court_types extends Model
{
    public function courts() {
        return $this ->hasMany(Courts::class);
    }

}
