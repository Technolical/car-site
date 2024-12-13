<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('cars')->insert(['owner' => 'Sheikh Ahmed', 'lot' => 'P1', 'make' => 'Vauxhall', 'model' => 'Zafira', 'year' => 2012, 'registration' => 'SD64 USH']);
    }
}
