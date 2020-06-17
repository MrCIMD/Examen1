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
            ["name" => "Pistola de calibre 50", "image" => "c51616214d3d81373476b75b4bf89b5391a9181577af9ba4c630454cb01c9de6.png", "precision" => 40, "scope" => 40, "hurt" => 60],
            ["name" => "Revolver de doble acción", "image" => "6d551b576dd42fecc159ad16736415ff3f25336025507f339bf328989f30e2c0.png", "precision" => 65, "scope" => 20, "hurt" => 70],
            ["name" => "Subfusil", "image" => "16983531827b6179f5b2794f3a246a58134d33692a1427456b741189b6c85357.png", "precision" => 40, "scope" => 35, "hurt" => 20],
        ]);
    }
}
