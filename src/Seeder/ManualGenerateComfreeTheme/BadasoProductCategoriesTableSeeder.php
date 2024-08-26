<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme\ManualGenerateComfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class BadasoProductCategoriesTableSeeder extends Seeder
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
			\DB::table('badaso_product_categories')->insert(array (
                0 =>
                array (
                    'parent_id' => NULL,
                    'name' => 'Menswear',
                    'slug' => 'menswear',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => NULL,
                    'created_at' => '2024-03-06 05:10:36',
                    'updated_at' => '2024-03-06 05:10:36',
                    'deleted_at' => NULL,
                ),
                1 =>
                array (
                    'parent_id' => NULL,
                    'name' => 'Men\'s Bag',
                    'slug' => 'mens-bag',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => NULL,
                    'created_at' => '2024-03-06 05:11:49',
                    'updated_at' => '2024-03-06 05:11:49',
                    'deleted_at' => NULL,
                ),
                2 =>
                array (
                    'parent_id' => NULL,
                    'name' => 'Electronic',
                    'slug' => 'electronic',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => NULL,
                    'created_at' => '2024-03-06 05:11:58',
                    'updated_at' => '2024-03-06 05:27:53',
                    'deleted_at' => '2024-03-06 05:27:53',
                ),
                3 =>
                array (
                    'parent_id' => NULL,
                    'name' => 'Men\'s Hat',
                    'slug' => 'mens-hat',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => NULL,
                    'created_at' => '2024-03-06 05:27:37',
                    'updated_at' => '2024-03-06 05:27:37',
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
