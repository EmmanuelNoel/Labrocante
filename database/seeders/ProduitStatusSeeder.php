<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('produit_statuses')->insert([
            [
                'id' => Str::uuid(),
                'nom' => 'valide',

            ],
            [
                'id' => Str::uuid(),
                'nom' => 'en_attente',

            ],
            [
                'id' => Str::uuid(),
                'nom' => 'non_valide',

            ],
            [
                'id' => Str::uuid(),
                'nom' => 'rejeté',

            ],


        ]);
    }
}
