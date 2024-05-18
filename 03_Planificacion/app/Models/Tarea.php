<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    public static $rules = [
        // 'name' => 'required|string|max:255',
        // Otros campos y reglas de validación
    ];
    public function proyecto()
    {
        //Relation uno a muchos (Inversa)
        return $this->belongsTo('App\Models\Proyecto');
    }
    public function Empleados()
    {
        //Relation uno a muchos (Inversa)
        return $this->belongsToMany('App\Models\Empleado');
    }
}
