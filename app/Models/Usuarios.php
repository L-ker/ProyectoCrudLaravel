<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    public $fillable=["nombre","usuario","email","password"];
}
