<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $guarded= ['status'];

    public function pension(){
        return $this->belongsTo(Pension::class);
    }     

    public function servicios(){
        return $this->belongsToMany(Servicio::class);
    }    

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    } 
    
    public function room(){
        return $this->belongsTo(Room::class);
    } 
}
