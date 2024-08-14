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
                    'value' => '{"navbar":{"name":"navbar","label":"Navbar","type":"array","data":[{"label":{"name":"label","label":"Label","type":"url","data":{"url":"#","text":"Katalog"}}},{"label":{"name":"label","label":"Label","type":"url","data":{"url":"#","text":"Blog"}}}]},"footer":{"name":"footer","label":"Footer","type":"group","data":{"footer1":{"name":"footer1","label":"Footer 1","type":"group","data":{"title":{"name":"title","label":"Title","type":"text","data":"COMFREE THEME"},"description":{"name":"description","label":"Description","type":"text","data":"Comfree Theme merupakan tema toko online yang dibuat khusus untuk Commerce Module"},"socialmedia":{"name":"socialmedia","label":"Social Media","type":"array","data":[{"name":{"name":"name","label":"Name","type":"url","data":{"url":null,"text":null}}}]}}},"footer2":{"name":"footer2","label":"Footer 2","type":"group","data":{"title":{"name":"title","label":"Title","type":"text","data":"LINK PENTING"},"list":{"name":"list","label":"List","type":"array","data":[{"name":{"name":"name","label":"Name","type":"url","data":{"url":null,"text":"Konfirmasi Pembayaran"}}},{"name":{"name":"name","label":"Name","type":"url","data":{"url":null,"text":"Pembayaran & Pengiriman"}}},{"name":{"name":"name","label":"Name","type":"url","data":{"url":null,"text":"Syarat & Ketentuan"}}}]}}},"footer3":{"name":"footer3","label":"Footer 3","type":"group","data":{"title":{"name":"title","label":"Title","type":"text","data":"Market Place"},"application":{"name":"application","label":"Application","type":"array","data":[{"name":{"name":"name","label":"name","type":"url","data":{"url":"https:\\/\\/www.tokopedia.com","text":null}},"icon":{"name":"icon","label":"icon","type":"image","data":"https:\\/\\/demo.saudagarwp.com\\/wp-content\\/themes\\/saudagarwp\\/assets\\/img\\/marketplace-tokopedia.webp"}},{"name":{"name":"name","label":"name","type":"url","data":{"url":"https:\\/\\/www.lazada.co.id","text":null}},"icon":{"name":"icon","label":"icon","type":"image","data":"https:\\/\\/demo.saudagarwp.com\\/wp-content\\/themes\\/saudagarwp\\/assets\\/img\\/marketplace-lazada.webp"}},{"name":{"name":"name","label":"name","type":"url","data":{"url":"https:\\/\\/shopee.co.id","text":null}},"icon":{"name":"icon","label":"icon","type":"image","data":"https:\\/\\/demo.saudagarwp.com\\/wp-content\\/themes\\/saudagarwp\\/assets\\/img\\/marketplace-shopee.webp"}},{"name":{"name":"name","label":"name","type":"url","data":{"url":"https:\\/\\/www.tiktok.com","text":null}},"icon":{"name":"icon","label":"icon","type":"image","data":"https:\\/\\/demo.saudagarwp.com\\/wp-content\\/themes\\/saudagarwp\\/assets\\/img\\/marketplace-tiktok.webp"}}]}}},"copyright":{"name":"copyright","label":"Copyright","type":"text","data":"@Copyright Uasoft 2024. All Rights Reserved"}}}}',
                    'created_at' => '2024-03-05 08:07:16',
                    'updated_at' => '2024-03-20 07:11:57',
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
