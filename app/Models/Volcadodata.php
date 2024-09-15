<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volcadodata extends Model
{
    use HasFactory;

    protected $table = 'volcadodatas'; // Nombre de la tabla

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'id_check',
        'fecha',
        'data',
        'empresa',
        'info',
    ];

    // Relación con el modelo Usuario (un Volcadodata pertenece a una Empresa)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'empresa', 'id_empresa');
    }

    // Relación con el modelo Checkmail (si `id_check` proviene de `checkmail`)
    public function checkmail()
    {
        return $this->belongsTo(Checkmail::class, 'id_check', 'id_check');
    }

    // Relación con el modelo Checknumber (si `id_check` proviene de `checknumber`)
    public function checknumber()
    {
        return $this->belongsTo(Checknumber::class, 'id_check', 'id_check');
    }
}
