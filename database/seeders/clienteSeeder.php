<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\clientes;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clientes::firstOrCreate([
            'id' => 1
        ],[
            'first_name' => 'Pedro',
            'second_name' => 'Andres',
            'first_surname' => 'Velez',
            'second_surname' => 'Naranjo',
            'direccion' => 'cll 2 casa 3',
            'telefono' => 31600005

        ]);

        clientes::firstOrCreate([
            'id' => 2
        ],[
            'first_name' => 'Daniel',
            'second_name' => null,
            'first_surname' => 'Perez',
            'second_surname' => 'Ortis',
            'direccion' => 'cll 2 casa 15',
            'telefono' => 31600005

        ]);

        clientes::firstOrCreate([
            'id' => 3
        ],[
            'first_name' => 'Camilo',
            'second_name' => 'Andres',
            'first_surname' => 'Suares',
            'second_surname' => 'Cardenas',
            'direccion' => 'cll 23 casa 31',
            'telefono' => 31600005

        ]);
    }
}
