<?php

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
        // $this->call(UserSeeder::class);
        $this->call(EntidadSeeder::class);
        $this->call(UniversidadSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(PuestoSeeder::class);
        $this->call(UniDepaSeeder::class);
        $this->call(DepartamentoPuestoSeeder::class);
        $this->call(RecursosHumanosSeeder::class);
    }
}
