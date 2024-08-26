<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme\ManualGenerateComfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class BadasoProductsTableSeeder extends Seeder
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

			\DB::table('badaso_products')->insert(array (
                0 =>
                array (
                    'id' => 1,
                    'product_category_id' => 2,
                    'name' => 'Waxed Canvas Messenger Bag',
                    'slug' => 'waxed-canvas-messenger-bag',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/bag-navy-3-300x300.webp',
                'desc' => '<h5 style="box-sizing: border-box; font-size: 1.2rem; color: var(--theme-font-color-primary); font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; line-height: 1.2; padding: 0px; margin-top: 0px; margin-bottom: 0.714286em; font-weight: var(--theme-font-weight); text-transform: none; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">Alasan berbelanja di Comfree Theme</h5>
<ul style="box-sizing: border-box; padding: 0px; margin: 0px; color: #7a7a7a; font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
<li style="box-sizing: border-box; list-style: none; display: flex; -webkit-box-align: start; align-items: start; margin-bottom: 3px;"><span style="box-sizing: border-box;">Pesanan sebelum jam 2 siang akan diproses dihari yang sama</span></li>
<li style="box-sizing: border-box; list-style: none; display: flex; -webkit-box-align: start; align-items: start; margin-bottom: 3px;"><span style="box-sizing: border-box;">Garansi uang kembali</span></li>
<li style="box-sizing: border-box; list-style: none; display: flex; -webkit-box-align: start; align-items: start; margin-bottom: 3px;"><span style="box-sizing: border-box;">Bisa COD - Bayar setelah barang sampai</span></li>
</ul>
<p>&nbsp;</p>',
                    'created_at' => '2024-08-23 08:48:30',
                    'updated_at' => '2024-08-23 09:26:55',
                    'deleted_at' => NULL,
                ),
                1 =>
                array (
                    'id' => 2,
                    'product_category_id' => 1,
                    'name' => 'Do What You Love',
                    'slug' => 'do-what-you-love',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/do-what-1-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:06:53',
                    'updated_at' => '2024-08-23 09:06:53',
                    'deleted_at' => NULL,
                ),
                2 =>
                array (
                    'id' => 3,
                    'product_category_id' => 1,
                    'name' => 'And Then I Woke Up',
                    'slug' => 'and-then-i-woke-up',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/and-then-3-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:09:39',
                    'updated_at' => '2024-08-23 09:09:39',
                    'deleted_at' => NULL,
                ),
                3 =>
                array (
                    'id' => 4,
                    'product_category_id' => 2,
                    'name' => 'Waxed Canvas Messenger Bag Edition',
                    'slug' => 'waxed-canvas-messenger-bag-edition',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/charcoal-messenger-6-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:12:01',
                    'updated_at' => '2024-08-23 09:12:01',
                    'deleted_at' => NULL,
                ),
                4 =>
                array (
                    'id' => 5,
                    'product_category_id' => 4,
                    'name' => 'Mountains Baseball Cap',
                    'slug' => 'mountains-baseball-cap',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/cap-2-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:14:59',
                    'updated_at' => '2024-08-23 09:14:59',
                    'deleted_at' => NULL,
                ),
                5 =>
                array (
                    'id' => 6,
                    'product_category_id' => 1,
                    'name' => 'Minimize',
                    'slug' => 'minimize',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/min-green-4-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:17:40',
                    'updated_at' => '2024-08-23 09:17:40',
                    'deleted_at' => NULL,
                ),
                6 =>
                array (
                    'id' => 7,
                    'product_category_id' => 4,
                    'name' => 'Chunky Knit Beanie',
                    'slug' => 'chunky-knit-beanie',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/beanies-5-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:20:07',
                    'updated_at' => '2024-08-23 09:20:07',
                    'deleted_at' => NULL,
                ),
                7 =>
                array (
                    'id' => 8,
                    'product_category_id' => 2,
                    'name' => 'Carry On',
                    'slug' => 'carry-on',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/carri-on-4-300x300.webp',
                    'desc' => NULL,
                    'created_at' => '2024-08-23 09:21:59',
                    'updated_at' => '2024-08-23 09:21:59',
                    'deleted_at' => NULL,
                ),
            ));

			\DB::commit();
		} catch(Exception $e) {
			\DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
