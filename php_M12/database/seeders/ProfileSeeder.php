<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prof= new Profile();
        $prof->federation_id= '1';
        $prof->ambito= 'Nacional';
        $prof->presidente= 'Jose María Villar';
        $prof->fundacion= '1913';
        $prof->save();

        $prof2= new Profile();
        $prof2->federation_id= '2';
        $prof2->ambito= 'Comunidad';
        $prof2->presidente= 'Pujolet';
        $prof2->fundacion= '1940';
        $prof2->save();

    }
}
