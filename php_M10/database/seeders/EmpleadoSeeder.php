<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado= new Empleado();
        $empleado->nombre= 'Ana';
        $empleado->sueldo= '10';
        $empleado->id_puesto= '1';
        $empleado->id_ss= '1';
        $empleado->save();

        $empleado1= new Empleado();
        $empleado1->nombre= 'Pedro';
        $empleado1->sueldo= '10';
        $empleado1->id_puesto= '2';
        $empleado1->id_ss= '2';
        $empleado1->save();

        $empleado2= new Empleado();
        $empleado2->nombre= 'María';
        $empleado2->sueldo= '20';
        $empleado2->id_puesto= '3';
        $empleado2->id_ss= '3';
        $empleado2->save();

        $empleado3= new Empleado();
        $empleado3->nombre= 'Juan';
        $empleado3->sueldo= '30';
        $empleado3->id_puesto= '4';
        $empleado3->id_ss= '4';
        $empleado3->save();

    }
}
