<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public static $rules = [
        // 'nombre' => 'required|string|',
        // Otros campos y reglas de validación
    ];

    //Relation uno a muchos 
    public function entrevistas()
    {
        return $this->hasMany('App\Models\Entrevista');
    }
    //Relation uno a muchos
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto');
    }
}
