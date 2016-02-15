<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeProject\Client::truncate(); //Apaga os registros da Tabela e cria novamente

        factory(\CodeProject\Client::class, 10)->create();
    }
}
