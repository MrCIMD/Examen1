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
            ["name" => "Outlaw", "image" => "outlaw.jpg", "precision" => 55, "scope" => 95, "hurt" => 83],
            ["name" => "Locus", "image" => "Locus.jpg", "precision" => 55, "scope" => 95, "hurt" => 95],
            ["name" => "DL Q33", "image" => "DL Q33.jpg", "precision" => 60, "scope" => 95, "hurt" => 90],
            ["name" => "Artic.50", "image" => "artic50.jgp", "precision" => 52, "scope" => 95, "hurt" => 85],
            ["name" => "M21 EBR", "image" => "M21.jpg", "precision" => 60, "scope" => 90, "hurt" => 80]
        ]);
    }
}
