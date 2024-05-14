<?php

namespace Database\Seeders;

use App\Models\Canal;
use Illuminate\Database\Seeder;

class CanalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canal::create([
            'tipo_canal' => 'Facebook/Messenger'
        ]);

        Canal::create([
            'tipo_canal' => 'WhatsApp'
        ]);

        Canal::create([
            'tipo_canal' => 'Instagram'
        ]);

        Canal::create([
            'tipo_canal' => 'Telegram'
        ]);
    }
}
