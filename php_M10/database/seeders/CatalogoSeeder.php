<?php

namespace Database\Seeders;

use App\Models\Catalogo;
use Illuminate\Database\Seeder;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catalogo= new Catalogo();
        $catalogo->titulo= 'Curso Laravel';
        $catalogo->autor= 'ITAcademy';
        $catalogo->genero= 'Informatica';
        $catalogo->save();

        $catalogo2= new Catalogo();
        $catalogo2->titulo= 'Africanus';
        $catalogo2->autor= 'Santiago Posteguillo';
        $catalogo2->genero= 'Ficción/historia';
        $catalogo2->save();

        $catalogo3= new Catalogo();
        $catalogo3->titulo= 'Julia Navarro';
        $catalogo3->autor= 'De ninguna parte';
        $catalogo3->genero= 'Ficción';
        $catalogo3->save();

    }
}
