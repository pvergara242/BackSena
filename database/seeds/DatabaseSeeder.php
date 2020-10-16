<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => '2020-10-09 13:52:57',         
            'password' => bcrypt('123456'),
            'remember_token' => 'srsntr3423jhgs',
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@mail.com',
            'email_verified_at' => '2020-10-09 13:52:57',         
            'password' => bcrypt('123456'),
            'remember_token' => 'srsntr3fr423jhgs',
        ]);
    }
}
