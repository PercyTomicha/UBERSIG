<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    public $timestamps = false;
    protected $primary='ci';
    protected $table='propietario';
    protected $fillable=['ci','foto_soat_ruat'];
}
