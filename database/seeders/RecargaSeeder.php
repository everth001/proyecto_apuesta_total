<?php

namespace Database\Seeders;

use App\Models\Recarga;
use Illuminate\Database\Seeder;

class RecargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recarga::create([
            'cliente_id' => '1',
            'canal_id' => '2',
            'tipo_moneda_id' => '1',
            'monto' => '100',
            'voucher' => 'rutaxD'
        ]);

        Recarga::create([
            'cliente_id' => '2',
            'canal_id' => '1',
            'tipo_moneda_id' => '2',
            'monto' => '10',
            'voucher' => 'rutaxD'
        ]);
    }
}
