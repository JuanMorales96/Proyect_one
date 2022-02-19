<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\recipientes;

class RecipienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        recipientes::firstOrCreate([
            'id' => 1
        ],[
            'nombre' => 'cono de vainilla',
            'descripcion' => 'galleta wafer en forma de cono con sabor artificial a vainilla'
        ]);

        recipientes::firstOrCreate([
            'id' => 2
        ],[
            'nombre' => 'copa de vidrio',
            'descripcion' => 'copa de vidrio templado'
        ]);
    }
}
