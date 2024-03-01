<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme;

use Illuminate\Database\Seeder;

class BadasoComfreeThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ComfreeThemeMenusSeeder::class);
        $this->call(ComfreeThemeFixedMenuItemSeeder::class);
        $this->call(ComfreeThemePermissionsSeeder::class);
        $this->call(ComfreeThemeContentsSeeder::class);
        $this->call(ComfreeThemeConfigurationsSeeder::class);
    }
}
