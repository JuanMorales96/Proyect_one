<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empleados;

class empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleados::firstOrCreate([
            'id' => 1
        ],[
            'first_name' => 'Ana',
            'second_name' => 'Maria',
            'first_surname' => 'Valencia',
            'second_surname' => 'Londoño',
            'cargo' => 'gerente',
            'cedula' => 103234345,
            'telefono' => 312456567,
            'direccion' => 'cr 13 cll 23 distrito 1'
        ]);

        empleados::firstOrCreate([
            'id' => 2
        ],[
          'first_name' => 'Valeria',
          'second_name' => null,
          'first_surname' => 'Cardona',
          'second_surname' => null,
          'cargo' => 'asesor',
          'cedula' => 103234345,
          'telefono' => 312456567,
          'direccion' => 'cr 13 cll 23 distrito 1'
        ]);

        empleados::firstOrCreate([
            'id' => 3
        ],[
            'first_name' => 'Dahiana',
            'second_name' => null,
            'first_surname' => 'Cardona',
            'second_surname' => 'Vele',
            'cargo' => 'asesor',
            'cedula' => 103234345,
            'telefono' => 312456567,
            'direccion' => 'cr 13 cll 23 distrito 1'
        ]);
    }
}
