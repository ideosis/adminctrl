<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 5) as $index) {
        	$name=$faker->word;
        	$slug=$name;
        	DB::table('categories')->insert([
                'category_name' => ucwords($name),
                'category_slug' => $slug,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);
        }
    }
}
