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

        DB::table('user')->insert([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 10
        ]);

        DB::table('user')->insert([
            'firstname' => 'David',
            'lastname' => 'Smith',
            'email' => 'david@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 30
        ]);

        DB::table('user')->insert([
            'firstname' => 'Julia',
            'lastname' => 'Smith',
            'email' => 'julia@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
        ]);


        DB::table('user')->insert([
            'firstname' => 'Mia',
            'lastname' => 'Smith',
            'email' => 'Mia@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 10
        ]);

        DB::table('user')->insert([
            'firstname' => 'Matthis',
            'lastname' => 'Smith',
            'email' => 'matthis@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 10
        ]);

        DB::table('user')->insert([
            'firstname' => 'Dylan',
            'lastname' => 'Smith',
            'email' => 'dylan@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 10
        ]);

        DB::table('user')->insert([
            'firstname' => 'Tommy',
            'lastname' => 'Smith',
            'email' => 'tommy@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 30
        ]);

        DB::table('user')->insert([
            'firstname' => 'Justin',
            'lastname' => 'Smith',
            'email' => 'justin@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 10
        ]);

        DB::table('user')->insert([
            'firstname' => 'Loic',
            'lastname' => 'Smith',
            'email' => 'loic@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 50
        ]);

        DB::table('user')->insert([
            'firstname' => 'Louis',
            'lastname' => 'Smith',
            'email' => 'louis@test.ca',
            'password'=> '$2y$10$Ttn/j.4r.50DcSp50c6Ka.KmkwwyGkHqqqxH6FadK3nrkuu7O3aqK',
            'role' => 'user',
            'api_token' => '',
            'register_token' => '',
            'is_verified' => true,
            'is_subscriber' => 10
        ]);

    }
}
