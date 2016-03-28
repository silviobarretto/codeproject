<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CarreiraEad\Entities\User::class)->create([
            'name' => 'Silvio',
            'email' => 'silvio@emekate.com.br',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
        ]);

        factory(\CarreiraEad\Entities\User::class, 10)->create();
    }
}
