<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '12345678',
            'nombres' => 'Luis Miguel',
            'apellidos' => 'Moran Moran',
            'email' => 'luis@gmail.com',
            'telefono' => '123456789',
            'direccion' => 'Calle los Morales 123 Mz. B Lt 15',
            'tipo_moneda_id' => '1',
            'saldo' => '0',
            'status' => '1'
        ]);

        Cliente::create([
            'tipo_documento' => 'DNI',
            'numero_documento' => '31254679',
            'nombres' => 'Pedro Luis',
            'apellidos' => 'Perez Suarez',
            'email' => 'pedro@gmail.com',
            'telefono' => '987654321',
            'direccion' => 'Calle los Juarez 3 Mz. Z Lt 01',
            'tipo_moneda_id' => '2',
            'saldo' => '100',
            'status' => '1'
        ]);
    }
}
