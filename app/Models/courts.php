<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class courts extends Model
{
   public function index() {
       return $this ->belongsTo(Court_types::class, 'court_type_id');  
   }
}
