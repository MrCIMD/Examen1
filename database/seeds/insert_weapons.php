<?php

use Illuminate\Database\Seeder;

class insert_weapons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapons')->insert([
            ["name" => "", "image" => "", "precision" => "", "scope" => "", "hurt" => ""]
        ]);
    }
}
