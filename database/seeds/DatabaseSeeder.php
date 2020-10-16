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

        DB::table('roles')->insert([
            'name' => 'superAdmin',
            'description' => 'Administrador general del sistema',
            'created_at' => '2020-10-09 13:42:02',
            'updated_at' => '2020-10-09 13:42:08',
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'admin del sistema',
            'created_at' => '2020-10-09 13:42:10',
            'updated_at' => '2020-10-09 13:42:14',
        ]);
        DB::table('roles')->insert([
            'name' => 'usuario',
            'description' => 'Usuario',
            'created_at' => '2020-10-09 13:42:18',
            'updated_at' => '2020-10-09 13:42:22',
        ]);
        DB::table('roles')->insert([
            'name' => 'gerente',
            'description' => 'Jefe de recursos',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => '2020-10-09 13:52:57',         
            'password' => bcrypt('123456'),
            'remember_token' => 'srsntr3423jhgs',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@mail.com',
            'email_verified_at' => '2020-10-09 13:52:57',         
            'password' => bcrypt('123456'),
            'remember_token' => 'srsntr3fr423jhgs',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('products')->insert([
            'codigo' => '5423ngt',
            'unidad' => '100',
            'desripcion' => 'Zapatos para dama',         
            'especificaciones' => 'De color Negro',         
            'cantidad' => '30',
            'productos' => 'Zapatos',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('products')->insert([
            'codigo' => '542gfngt',
            'unidad' => '30',
            'desripcion' => 'Carteras para dama',         
            'especificaciones' => 'De color Negro',         
            'cantidad' => '50',
            'productos' => 'Carteras',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);
    }
}
