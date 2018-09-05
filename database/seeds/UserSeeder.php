<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [   'name' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => '$2y$10$ZfiL8DPwMHBWfjFKGUvi9OQA0p5pod2fNiX66TxSPzLal5IomfzCe',
                    'remember_token' => 'nHrCEJGSeRot0JLkL4tHuPWGfqURkegU64dkfqYfsd4D8RyauPd3SaRjvr3c',
                    'type' => 'admin' 
                ],
                [
                    'name' => 'test user',
                    'email' => 'test@email.com',
                    'password' => '$2y$10$ClNse.cpWw12LboHjsex9OLexmuJXFDyGAHvFPpxgbAJ0QSRopoge',
                    'remember_token' => 'hcUYyU7zoXwGRr5ZcIiS2YdUGf95oUneXUZ3SCZEr19yJdpFZH8YKVrsCxkF',
                    'type' => 'default'
                ],
            ]
         );
    }
}
