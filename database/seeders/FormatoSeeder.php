<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formatos')->insert([
            'nombre' => 'Vinilo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('formatos')->insert([
            'nombre' => 'CD',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
