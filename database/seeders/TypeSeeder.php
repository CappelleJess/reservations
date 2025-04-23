<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();

        $data = [
            ['types'=>'comédien'],
            ['types'=>'scénographe'],
            ['types'=>'auteur'],
        ];

        DB::table('types')->insert($data);
    }
}
// DB::table('types')->truncate();

//         $data = [
//             ['type', 'comédien'],
//             ['type', 'scénographe'],
//             ['type', 'auteur'],
//         ];

//         DB::table('types')->insert($data);