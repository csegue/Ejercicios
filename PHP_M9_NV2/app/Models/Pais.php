<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table= "paises";      // El modelo tiene que estar en Mayúsculas y singular sino lo declaramos aquí.


    //ASIGNACION MASIVA ***************************************************************************************** */
    //protected $fillable= ['name','descripcion','categoria'];    // Campos que queremos que se guarden he ignorar los campos protegidos
    //protected $guarded= ['status'];                             // Colocamos los campos protegidos he ignorar los permitidos
    protected $guarded= [''];                                       // Cuando no tenemos campos protegidos
}
