<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public static $rules = [
        // 'nombre' => 'required|string|',
        // Otros campos y reglas de validación
    ];
    //Relation muchos a muchos
    // public function Empleados(){
    //     return $this->belongsToMany('App\Models\Empleado');
    // }
    //Relation muchos a muchos
    public function Users(){
        return $this->belongsToMany('App\Models\User');
    }
}
