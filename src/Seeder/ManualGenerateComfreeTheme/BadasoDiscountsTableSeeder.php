<?php

namespace Database\Seeders\Badaso\Commerce\Theme\ComfreeTheme\ManualGenerateComfreeTheme;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class BadasoDiscountsTableSeeder extends Seeder
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
			\DB::table('badaso_discounts')->delete();

			\DB::table('badaso_discounts')->insert(array (
                0 =>
                array (
                    'id' => 1,
                    'name' => 'Gebyar Diskon Merdeka',
                    'desc' => NULL,
                    'discount_type' => 'fixed',
                    'discount_percent' => NULL,
                    'discount_fixed' => 20000.0,
                    'active' => 0,
                    'created_at' => '2024-08-23 08:44:46',
                    'updated_at' => '2024-08-23 08:44:46',
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
