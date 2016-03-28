<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \CarreiraEad\Entities\User::truncate();
        ////\CarreiraEad\Entities\Client::truncate();
        //\CarreiraEad\Entities\Project::truncate();
        //\CarreiraEad\Entities\ProjectNote::truncate();

        $this->call(UserTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectNoteTableSeeder::class);


        //TODO confirmar se necessita
        //Model::reguard();
    }
}
