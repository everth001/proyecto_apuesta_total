<?php

namespace Database\Seeders;

use App\Models\TipoMoneda;
use Illuminate\Database\Seeder;

class TipoMonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoMoneda::create([
            'tipo_moneda' => 'Soles'
        ]);

        TipoMoneda::create([
            'tipo_moneda' => 'Dolares'
        ]);
    }
}
