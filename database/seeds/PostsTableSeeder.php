<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $category = Category::pluck('id')->toArray();

        foreach (range(1, 20) as $index) {

        	$post_title = $faker->realText($maxNbChars = 50, $indexSize = 2);
            
            DB::table('posts')->insert([
            	'post_type' => 'post',
            	'user_id' => 1,
                'post_title' => $post_title,
                'post_slug' => str_slug($post_title, '-'),
                'post_content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'category_id' => $faker->randomElement($category),
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);
        }
    }
}
