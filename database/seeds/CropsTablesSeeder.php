<?php

use Illuminate\Database\Seeder;
use App\CropCategory;

class CropsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Crops Categories & Crops assigned.
     *
     * @return void
     */
    public function run()
    {
        $cereals = App\CropCategory::create(["alias"=>"cereals","name"=>"зерновые","translit"=>"zernovyye"]);
        $cereals->crops()->createMany([
            ["alias"=>"barley","name"=>"ячмень","translit"=>"yachmen","available"=>"yes"],
            ["alias"=>"wheat","name"=>"пшеница","translit"=>"pshenitsa","available"=>"yes"],
            ["alias"=>"corn","name"=>"кукуруза","translit"=>"kukuruza","available"=>"yes"],
            ["alias"=>"buckwheat","name"=>"гречиха","translit"=>"grechikha","available"=>"yes"],
            ["alias"=>"rye","name"=>"рожь","translit"=>"rozh","available"=>"yes"],
            ["alias"=>"oats","name"=>"овес","translit"=>"oves","available"=>"yes"],
            ["alias"=>"millet","name"=>"просо","translit"=>"proso","available"=>"yes"],
        ]);
    
        $oilseeds = App\CropCategory::create(["alias"=>"oilseeds","name"=>"масличные","translit"=>"maslichnyye"]);
        $oilseeds->crops()->createMany([
            ["alias"=>"sunflower","name"=>"подсолнечник","translit"=>"podsolnechnik","available"=>"yes"],
            ["alias"=>"rape","name"=>"рапс","translit"=>"raps","available"=>"yes"],
        ]);

        $legumes = App\CropCategory::create(["alias"=>"legumes","name"=>"бобовые","translit"=>"bobovyye"]);
        $legumes->crops()->createMany([
            ["alias"=>"soybean","name"=>"соя","translit"=>"soya","available"=>"yes"],
            ["alias"=>"peas","name"=>"горох","translit"=>"gorokh","available"=>"yes"],
        ]);
    }
}
