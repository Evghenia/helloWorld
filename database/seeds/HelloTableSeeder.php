<?php

use Illuminate\Database\Seeder;

class HelloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hello')->insert([
            'name' => "Hello",
        ]);
    }

    public function down()
    {
        DB::table('hello')->delete();
    }
}
