<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
    //indicas la tabla con la que trabajaras
    protected $table="mascotas";
    //indicas cual es tu llave primaria en la tabla
    protected $primaryKey="id";
    //seleccionar los datos que quieres insertar
    protected $filable=['nombre','edad','tipo','color'];
}
