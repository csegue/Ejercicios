<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pension;
use Spatie\Permission\Traits\HasRoles;


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

         $this->call(PensionSeeder::class);
         $this->call(ClienteSeeder::class);
         $this->call(RoomSeeder::class);
         $this->call(ServicioSeeder::class);
         $this->call(ReservaSeeder::class);
         $this->call(RoleSeeder::class);
//         $this->call(Reserva_servicioSeeder::class);

         $this->call(UserSeeder::class);
    }
}
