<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(
        [
            [  'name' => 'schuurspons rood',
                'description' => 'prachtige schuurspons voor de vaat',
                'price' => '9.98'
            ],
            [  'name' => 'Schuurspons groen',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98'
            ],
            [  'name' => 'Schuurspons blauw',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98'
            ],
            [  'name' => 'Schuurspons orange',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98'
            ],
            [  'name' => 'Schuurspons paars',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98',
            ],
            [  'name' => 'Zachte spons rood',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons groen',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons blauw',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons orange',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons paars',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
        ]);  
    }
}
