<?php

use Illuminate\Database\Seeder;

class WorldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('world')->insert([
            'name' => "World",
        ]);
    }

    public function down()
    {
        DB::table('world')->delete();
    }
}
