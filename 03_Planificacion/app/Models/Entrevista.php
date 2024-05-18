<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    use HasFactory;
    public static $rules = [
        // 'name' => 'required|string|max:255',
        // Otros campos y reglas de validación
    ];
    //Relation uno a mucho (Inversa)
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
}
