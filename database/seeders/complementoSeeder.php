<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\complementos;

class complementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        complementos::firstOrCreate([
            'id' => 1
        ],[
            'nombre' => 'fresas',
            'descripcion' => 'producto organico sin procesar'
        ]);
    }
}
