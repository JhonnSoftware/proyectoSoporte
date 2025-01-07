<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nombre', 'codigo', 'descripcion', 'precioUnitario', 'stock', 'estado', 'fotografia', 'id_categoria'];

    protected $table = "producto";

    public $timestamps = false;
}
