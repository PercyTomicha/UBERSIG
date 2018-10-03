<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    public $timestamps = false;
    protected $primary='ci';
    protected $table='chofer';
    protected $fillable=['ci','licencia','cod_antecedentes','foto_licencia','imei','password'];
}