<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    public $fillable=["nombre","usuario","email","password"];

    public function puntuaciones(){
        return $this->hasMany(Idioma::class);
    }
}
