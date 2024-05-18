<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public static $rules = [
        // 'name' => 'required|string|max:255',
        // Otros campos y reglas de validación
    ];

    public function cliente()
    {
        //Relation uno a muchos (Inversa)
        return $this->belongsTo('App\Models\Cliente');
    }
        //Relation uno a muchos
    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea');
    }
    
}
