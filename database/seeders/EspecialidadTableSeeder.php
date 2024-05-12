<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Cirugía Oral'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Endodoncia'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Estética'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Implantología'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Odontología general'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Odontopediatría'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Operatoria Dental'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Ortodoncia'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Periodoncia'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Prostodoncia'
        ]);
        DB::table('especialidad')->insert([
            'nespecialidad' => 'Rehabilitación Oral'
        ]);
    }
}
