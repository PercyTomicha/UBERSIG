<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    public $timestamps = false;
    protected $primary='placa';
    protected $table='taxi';
    protected $fillable=['placa','marca','modelo','anio','color','numero_asientos','numero_puertas', 
   'con_parrilla','con_aire','codigo_ruat','ci_chofer','ci_propietario'];
}
