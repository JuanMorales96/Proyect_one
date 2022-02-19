<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productos_procesados;

class productoProcesadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productos_procesados::firstOrCreate([
            'id' => 1
        ],[
            'nombre' => 'Helado de fresas',
            'precio' => 2500,
            'descripcion' => 'Crema de helado sabor a fresas con pedazos de esta fruta, sobre una base de galleta wafer en forma de cono'
        ]);
        productos_procesados::firstOrCreate([
            'id' => 2
        ],[
            'nombre' => 'Helado de choclolate',
            'precio' => 2500,
            'descripcion' => "crema de helado sabor chocolate"
        ]);
        productos_procesados::firstOrCreate([
            'id' => 3
        ],[
            'nombre' => 'Helado de fresas',
            'precio' => 2500,
            'descripcion' => 'Crema de helado sabor a fresas '
        ]);
        productos_procesados::firstOrCreate([
            'id' => 4
        ],[
            'nombre' => 'Helado de vainilla',
            'precio' => 2500,
            'descripcion' => 'Crema de helado sabor a vainilla'
        ]);
    }
}
