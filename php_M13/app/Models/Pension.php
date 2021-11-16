<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Pension extends Model
{
    use HasFactory;
    protected $guarded= ['status'];

    public function Reservas(){ 
        return $this->hasMany(Reserva::class);   
    }
}
