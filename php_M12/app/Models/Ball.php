<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    use HasFactory;
    public function federations(){                            // un ball tiene muchos federaciones
        return $this->hasMany(Federation::class);
    }
}
