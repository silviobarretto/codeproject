<?php

use Illuminate\Database\Seeder;

class ProjectNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CarreiraEad\Entities\ProjectNote::class, 50)->create();
    }
}
