<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Define el nombre de la tabla si no sigue el estándar plural de Laravel ('usuarios')
    protected $table = 'usuarios'; 

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'id_empresa',
        'nombre',
        'direccion',
        'nombre_representante',
        'apellido_p',
        'apellido_m',
        'telefono',
        'correo',
        'TYC',
    ];

    // Si no quieres que los timestamps (created_at, updated_at) se gestionen automáticamente
    public $timestamps = true;

    // Puedes agregar relaciones aquí si tu tabla tiene relaciones con otras tablas
    // Por ejemplo, si un usuario pertenece a una empresa:
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
