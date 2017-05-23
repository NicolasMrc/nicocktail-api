<?php

use App\Models\Bundle;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'firstname' => 'Nicolas',
            'lastname' => 'Mercier',
            'email' => 'nyckoo@live.fr',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => false,
        ]);

        DB::table('user')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@nicolasmercier.io',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'admin',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
        ]);

    }
}
