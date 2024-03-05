<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\Configuration;

class ComfreeThemeConfigurationsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $settings = [
                0 => [
                    'key'          => 'comfreeThemeSiteTitle',
                    'display_name' => 'Site Title',
                    'value'        => 'Comfree Theme',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 1,
                    'group'        => 'comfreeTheme',
                    'can_delete'   => 0,
                ],
                1 => [
                    'key'          => 'comfreeThemeFavicon',
                    'display_name' => 'Favicon Website',
                    'value'        => 'photos/1/favicon.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 2,
                    'group'        => 'comfreeTheme',
                    'can_delete'   => 0,
                ],
                2 => [
                    'key'          => 'comfreeThemeNavbarIcon',
                    'display_name' => 'Navbar Icon Theme',
                    'value'        => 'photos/1/full-logo-badaso.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 3,
                    'group'        => 'comfreeTheme',
                    'can_delete'   => 0,
                ],

            ];

            foreach ($settings as $key => $value) {
                Configuration::where('key', $value['key'])->delete();
                Configuration::create($value);
            }

            DB::commit();
        } catch (Exception $e) {
            throw new Exception('Exception occur '.$e);
            DB::rollBack();
        }
    }
}
