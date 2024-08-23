<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme\ManualGenerateComfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoComfreeManualGenerateSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeds/Badaso/ManualGenerate/';

    public function run()
    {
        $this->seed(BadasoDiscountsTableSeeder::class);
        $this->seed(BadasoProductsTableSeeder::class);
        $this->seed(BadasoProductDetailsTableSeeder::class);
    }
}
