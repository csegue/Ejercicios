<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    use HasFactory;
    
    public function profile(){ 
        return $this->hasOne(Profile::class); 
    }

    public function ball(){                      // una federacion tiene un balón oficial y un balón varias federaciones
        return $this->belongsTo(Ball::class);
    }

    public function equipos(){                      
        return $this->belongsToMany(Equipo::class);
    }

    public function location(){                     
        return $this->hasOneThrough(Location::class, Profile::class);  // tengo un campo ciudad atraves de la tabla profiles
    }

    public function liga(){ 
        return $this->hasOne(Liga::class); 
    }


}
