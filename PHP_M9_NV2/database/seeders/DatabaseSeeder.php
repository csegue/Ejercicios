<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    
        /* $this->call(PaisSeeder::class);        AÑADIR REGISTROS CON SEEDERS   lo anulo para utilizar factory*/
    
        Pais::factory(5)->Create();

    }


}
