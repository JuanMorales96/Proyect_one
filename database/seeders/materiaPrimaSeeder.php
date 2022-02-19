<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\materias_primas;

class materiaPrimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        materias_primas::firstOrCreate([
            'id' => 1
        ],[
            'nombre' => 'crema de fresas',
            'descripcion' => 'producto a base de leche procesado con sabor artificial a fresa'
        ]);
    }
}
