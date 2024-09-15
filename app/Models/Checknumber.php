<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checknumber extends Model
{
    use HasFactory;

    protected $table = 'checknumbers'; // Nombre de la tabla

    protected $primaryKey = 'id_check'; // Clave primaria personalizada

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'numero',
        'empresa',
    ];

    // Relación con el modelo Usuario (un Checknumber pertenece a una Empresa)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'empresa', 'id_empresa');
    }
}
