<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('category_products')->insert([
            [
                'id' => Str::uuid(),
                'nom' => 'Catégorie1',
                'slug' => 'categorie-1',
                'description' => 'Description de la catégorie 1',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'nom' => 'Catégorie 2',
                'slug' => 'categorie-2',
                'description' => 'Description de la catégorie 2',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}
