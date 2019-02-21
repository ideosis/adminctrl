<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Admin',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('roles')->insert([
            'role' => 'User',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
