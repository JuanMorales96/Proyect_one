<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\propiedades_alimenticias;

class propiedadesAlimenticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Registros de la tabla _propiedades_alimenticias
        //los registros para esta tabla seran en el siguiente orden:
        //calorias = numeros pares
        //grasas = numeros impares
        //proteina = multiplos de 3
        //calcio = multiplos de 5
        //solo seran 10 registros con estas cualidades las ingresadas  apartir de la 11aba seran desde la app y seran randoms
        propiedades_alimenticias::firstOrCreate([
            'id' => 1
        ],[
            'calorias' => '2',
            'grasas' => '1',
            'proteina' => '3',
            'calcio' => '5'
        ]);

        propiedades_alimenticias::firstOrCreate([
            'id' => 2
        ],[
            'calorias' => '4',
            'grasas' => '3',
            'proteina' => '6',
            'calcio' => '10'
        ]);

        propiedades_alimenticias::firstOrCreate([
            'id' => 3
        ],[
            'calorias' => '6',
            'grasas' => '5',
            'proteina' => '9',
            'calcio' => '15'
        ]);


        propiedades_alimenticias::firstOrCreate([
            'id' => 4
        ],[
            'calorias' => '8',
            'grasas' => '7',
            'proteina' => '12',
            'calcio' => '20'
        ]);


        propiedades_alimenticias::firstOrCreate([
            'id' => 5
        ],[
            'calorias' => '10',
            'grasas' => '9',
            'proteina' => '15',
            'calcio' => '25'
        ]);


        propiedades_alimenticias::firstOrCreate([
            'id' => 6
        ],[
            'calorias' => '12',
            'grasas' => '11',
            'proteina' => '18',
            'calcio' => '30'
        ]);


        propiedades_alimenticias::firstOrCreate([
            'id' => 7
        ],[
            'calorias' => '14',
            'grasas' => '13',
            'proteina' => '21',
            'calcio' => '35'
        ]);

        propiedades_alimenticias::firstOrCreate([
            'id' => 8
        ],[
            'calorias' => '16',
            'grasas' => '17',
            'proteina' => '24',
            'calcio' => '40'
        ]);


        propiedades_alimenticias::firstOrCreate([
            'id' => 9
        ],[
            'calorias' => '18',
            'grasas' => '19',
            'proteina' => '27',
            'calcio' => '45'
        ]);

        propiedades_alimenticias::firstOrCreate([
            'id' => 10
        ],[
            'calorias' => '20',
            'grasas' => '23',
            'proteina' => '30',
            'calcio' => '50'
        ]);
    }
}
