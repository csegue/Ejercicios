<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;



class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fed= new Location();
        $fed->profile_id= '1';
        $fed->ciudad= 'Madrid';
        $fed->save();

        $fed2= new Location();
        $fed2->profile_id= '2';
        $fed2->ciudad= 'Barcelona';
        $fed2->save();
    }
}
