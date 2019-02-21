<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('users')->insert([
            'name' => 'Hugh Quach',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
