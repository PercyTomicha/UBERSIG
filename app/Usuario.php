<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $primary='ci';
    protected $table='usuario';
    protected $fillable=['ci','nombres','apellidos','fecha_nacimiento','sexo','direccion','telefono','correo_electronico','foto','tipoChofer','tipoPropietario'];
}
