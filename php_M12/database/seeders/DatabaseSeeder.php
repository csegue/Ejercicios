<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this->call(RoleSeeder::class);
        
        $this->call(BallSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(FederationSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(LigaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
