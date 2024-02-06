<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = DB::table('users')->take(3)->get();

        // Récupérer quatre rôles de la base de données
        $roles = DB::table('roles')->take(3)->get();

        // Associer chaque utilisateur à un rôle
        foreach ($users as $index => $user) {
            DB::table('role_users')->insert([
             //   'id' => Str::uuid(),
                'user_id' => $user->id,
                'role_id' => $roles[$index]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
