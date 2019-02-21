<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('posts')->insert([
            'post_type' => 'page',
            'user_id' => 1,
            'post_title' => 'Home',
            'post_slug' => '/',
            'post_content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'category_id' => null,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('posts')->insert([
            'post_type' => 'page',
            'user_id' => 1,
            'post_title' => 'About',
            'post_slug' => 'about',
            'post_content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'category_id' => null,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('posts')->insert([
            'post_type' => 'page',
            'user_id' => 1,
            'post_title' => 'Contact',
            'post_slug' => 'contact',
            'post_content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'category_id' => null,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
