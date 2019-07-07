<?php

use Illuminate\Database\Seeder;
use App\SellerType;

class SellerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SellerType::create(["alias"=>"manufacturer","name"=>"производитель","translit"=>"proizvoditel","available"=>"yes"]);
        App\SellerType::create(["alias"=>"dealer","name"=>"посредник","translit"=>"posrednik","available"=>"yes"]);
        App\SellerType::create(["alias"=>"trader","name"=>"зернотрейдер","translit"=>"treyder","available"=>"yes"]);
    }
}
