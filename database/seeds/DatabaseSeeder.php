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
        $this->call(UniDepaPuesSeeder::class);
        $this->call(RecursosHumanosSeeder::class);

        $this->call(CarrerasSeeder::class);
        $this->call(GruposSeeder::class);
        $this->call(AlumnosSeeder::class);
        $this->call(AsignaturasSeeder::class);
        $this->call(AsignaturasAlumnosSeeder::class);
        $this->call(CalificacionesSeeder::class);

        $this->call(UserRolSeeder::class);
    }
}
