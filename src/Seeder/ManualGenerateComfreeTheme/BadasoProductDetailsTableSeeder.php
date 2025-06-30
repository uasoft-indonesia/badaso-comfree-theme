<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme\ManualGenerateComfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class BadasoProductDetailsTableSeeder extends Seeder
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

			\DB::table('badaso_product_details')->insert(array (
                0 =>
                array (
                    'id' => 1,
                    'product_id' => 1,
                    'discount_id' => 1,
                    'name' => 'Waxed Canvas Messenger Bag',
                    'quantity' => 10,
                    'price' => 580000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/bag-navy-3-300x300.webp',
                    'created_at' => '2024-08-23 08:48:30',
                    'updated_at' => '2024-08-23 08:48:30',
                    'deleted_at' => NULL,
                ),
                1 =>
                array (
                    'id' => 2,
                    'product_id' => 2,
                    'discount_id' => 1,
                    'name' => 'Do What You Love',
                    'quantity' => 15,
                    'price' => 320000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/do-what-1-300x300.webp',
                    'created_at' => '2024-08-23 09:06:53',
                    'updated_at' => '2024-08-23 09:06:53',
                    'deleted_at' => NULL,
                ),
                2 =>
                array (
                    'id' => 3,
                    'product_id' => 3,
                    'discount_id' => NULL,
                    'name' => 'And Then I Woke Up',
                    'quantity' => 20,
                    'price' => 320000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/and-then-3-150x150.webp',
                    'created_at' => '2024-08-23 09:09:39',
                    'updated_at' => '2024-08-23 09:09:39',
                    'deleted_at' => NULL,
                ),
                3 =>
                array (
                    'id' => 4,
                    'product_id' => 4,
                    'discount_id' => 1,
                    'name' => 'Waxed Canvas Messenger Bag Edition',
                    'quantity' => 10,
                    'price' => 580000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/charcoal-messenger-6-300x300.webp',
                    'created_at' => '2024-08-23 09:12:01',
                    'updated_at' => '2024-08-23 09:12:01',
                    'deleted_at' => NULL,
                ),
                4 =>
                array (
                    'id' => 5,
                    'product_id' => 5,
                    'discount_id' => NULL,
                    'name' => 'Mountains Baseball Cap',
                    'quantity' => 10,
                    'price' => 150000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/cap-2-300x300.webp',
                    'created_at' => '2024-08-23 09:14:59',
                    'updated_at' => '2024-08-23 09:14:59',
                    'deleted_at' => NULL,
                ),
                5 =>
                array (
                    'id' => 6,
                    'product_id' => 6,
                    'discount_id' => NULL,
                    'name' => 'Minimize',
                    'quantity' => 10,
                    'price' => 150000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/min-green-4-300x300.webp',
                    'created_at' => '2024-08-23 09:17:40',
                    'updated_at' => '2024-08-23 09:17:40',
                    'deleted_at' => NULL,
                ),
                6 =>
                array (
                    'id' => 7,
                    'product_id' => 7,
                    'discount_id' => NULL,
                    'name' => 'Chunky Knit Beanie',
                    'quantity' => 10,
                    'price' => 150000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/beanies-5-300x300.webp',
                    'created_at' => '2024-08-23 09:20:07',
                    'updated_at' => '2024-08-23 09:20:07',
                    'deleted_at' => NULL,
                ),
                7 =>
                array (
                    'id' => 8,
                    'product_id' => 8,
                    'discount_id' => NULL,
                    'name' => 'Carry On',
                    'quantity' => 10,
                    'price' => 480000.0,
                    'SKU' => 'SKU',
                    'product_image' => 'https://demo.saudagarwp.com/wp-content/uploads/sites/3/2019/01/carri-on-4-300x300.webp',
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
