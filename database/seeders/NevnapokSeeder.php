<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NevnapokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nevnapok')->insert([
            [
                'nev1' => 'Ádám',
                'nev2' => 'Éva',
                'ho' => 12,
                'nap' => 24,
            ],
            [
                'nev1' => 'István',
                'nev2' => 'Judit',
                'ho' => 8,
                'nap' => 20,
            ],
            [
                'nev1' => 'László',
                'nev2' => 'Lajos',
                'ho' => 6,
                'nap' => 27,
            ],
        ]);
    }
}
