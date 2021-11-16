<?php

namespace Database\Seeders;

use App\Models\Pension;
use Illuminate\Database\Seeder;



class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pen1= new Pension();
        $pen1->tipo_pen= 'Pensión completa';
        $pen1->save();

        $pen2= new Pension();
        $pen2->tipo_pen= 'Media Pensió';
        $pen2->save();

        $pen3= new Pension();
        $pen3->tipo_pen= 'Sin pensión';
        $pen3->save();

        $pen4= new Pension();
        $pen4->tipo_pen= 'Menú';
        $pen4->save();

    }
}
