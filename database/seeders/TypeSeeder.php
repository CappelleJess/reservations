<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->truncate();

        $data = [
            ['type', 'comédien'],
            ['type', 'scénographe'],
            ['type', 'auteur'],
        ];

        DB::table('types')->insert($data);
    }
}
