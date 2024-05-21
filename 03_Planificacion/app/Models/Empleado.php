<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public static $rules = [
        // 'name' => 'required|string|max:255',
        // Otros campos y reglas de validación
    ];
    //Relation muchos a muchos
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Models\Role');
    // }
    //Relation muchos a muchos
    public function Tareas()
    {
        return $this->belongsToMany('App\Models\Tarea');
    }
}
