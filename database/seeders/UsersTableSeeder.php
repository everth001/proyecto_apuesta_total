<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'lastname' => 'Del Sistema',
            'email' => 'contacto@izifarma.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'cargo' => 'Desarrollador',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Prueba',
            'lastname' => 'User',
            'email' => 'admin@material.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'cargo' => 'Administración',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
