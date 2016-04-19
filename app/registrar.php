<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrar extends Model
{
    
 //indicas la tabla con la que trabajaras
    protected $table="usuarios";
    //indicas cual es tu llave primaria en la tabla
    protected $primaryKey="id";
    //seleccionar los datos que quieres insertar
    protected $filable=['nombre','email','password'];
}
