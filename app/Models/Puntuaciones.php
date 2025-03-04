<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puntuaciones extends Model
{
    public function usuario(){
        return $this->belongsTo(Usuarios::class);
    }
    //
}
