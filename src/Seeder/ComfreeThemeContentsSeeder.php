<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Content\Models\Content;

class ComfreeThemeContentsSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();
        try {
            $contents = [
                0 => [
                    'slug' => 'comfree-theme',
                    'label' => 'Comfree Theme',
                    'value' =>
                    '{}',
                    'created_at' => '2024-01-30 06:16:40',
                    'updated_at' => '2024-01-31 06:25:22',
                ],
            ];



            foreach ($contents as $key => $content) {
                Content::where('slug', $content['slug'])->delete();
                Content::create($content);
            }

            DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
