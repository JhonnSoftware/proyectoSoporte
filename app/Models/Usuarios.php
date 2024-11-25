<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'prueba_usuarios';
    
    protected $fillable = [
        'usuario',
        'email',
        'password',
        'estado',
        'idRol',
    ];

    public $timestamps = true; // Asegúrate de que esta propiedad esté habilitada si estás usando los timestamps.

    // Si utilizas alguna columna como `password` que requiere encriptación, podrías agregar la mutadora
    protected $hidden = [
        'password', // Para que el campo de la contraseña esté oculto al momento de devolver los datos
    ];

    // Mutadores para asegurar que la contraseña se encripte automáticamente al guardarla
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
