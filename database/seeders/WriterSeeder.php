<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;   

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('writers')->insert([
            ['name' => 'Raka Putra Wicaksono', 'speciality' => 'Data Science'],
            ['name' => 'Bia Mecca Annisa', 'speciality' => 'Data & Network'],
            ['name' => 'Abi Firmansyah', 'speciality' => 'Network Security'],
        ]);
    }
}
