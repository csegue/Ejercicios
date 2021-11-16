<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    use HasFactory;
    protected $guarded= ['status'];                             // Colocamos los campos protegidos he ignorar los permitidos
}
