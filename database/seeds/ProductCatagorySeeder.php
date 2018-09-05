<?php

use Illuminate\Database\Seeder;

class ProductCatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_catagory')->insert(
            [
                ['product_id' => '1',
                 'catagory_id' => '1'],

                ['product_id' => '6',
                 'catagory_id' => '1'],

                ['product_id' => '2',
                 'catagory_id' => '2'],

                 ['product_id' => '7',
                 'catagory_id' => '2'],

                 ['product_id' => '3',
                 'catagory_id' => '3'],

                 ['product_id' => '8',
                 'catagory_id' => '3'],

                 ['product_id' => '4',
                 'catagory_id' => '4'],

                 ['product_id' => '9',
                 'catagory_id' => '4'],

                 ['product_id' => '5',
                 'catagory_id' => '5'],

                 ['product_id' => '10',
                 'catagory_id' => '5'],
            ]
        );
    }
}
