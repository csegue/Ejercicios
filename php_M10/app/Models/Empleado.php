<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    //*********************** ASIGNACION MASIVA ******************************************************************** */
    //protected $fillable= ['name','descripcion','categoria'];    // Campos que queremos que se guarden he ignorar los campos protegidos
    protected $guarded= ['status'];                             // Colocamos los campos protegidos he ignorar los permitidos
    //protected $guarded= [];                                       // Cuando no tenemos campos protegidos
}
