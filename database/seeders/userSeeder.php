<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\Auth\RegisteredUserController;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new RegisteredUserController();
       try {
           $jsonValue = ['user1' =>
                        [
                         'id' => 1,
                         'name' => 'pedro001',
                         'email' => 'pedro001@prueba',
                         'password' => 123456789
                        ],
                        'user2' =>
                        [
                         'id' => 2,
                         'name' => 'daniel002',
                         'email' => 'daniel002@prueba',
                         'password' => 123456789
                        ],
                        'user3' =>
                        [
                         'id' => 3,
                         'name' => 'camilo003',
                         'email' => 'camilo003@prueba',
                         'password' => 123456789
                        ],
                        'user4' =>
                        [
                         'id' => 4,
                         'name' => 'ana004',
                         'email' => 'ana004@prueba',
                         'password' => 123456789
                        ],
                        'user5' =>
                        [
                         'id' => 5,
                         'name' => 'valeria005',
                         'email' => 'valeria005@prueba',
                         'password' => 123456789
                        ],
                        'user6' =>
                        [
                         'id' => 6,
                         'name' => 'dahiana006',
                         'email' => 'dahiana006@prueba',
                         'password' => 123456789
                        ]

        ];
           $jsonConnvert = json_encode($jsonValue);
        $newUser->storeForSeeder($jsonConnvert);
       } catch (\Throwable $th) {
           dd($th);
       }
    }
}
