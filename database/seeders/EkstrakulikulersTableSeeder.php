<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakulikulersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ekskuls')->insert([
        'name' => 'Voli',
        'name' => 'Basket',
        'name' => 'Futsal',
        'name' => 'Pramuka',
        'name' => 'Osis',
        'name' => 'Paskibra',

    ]);
            }
}
