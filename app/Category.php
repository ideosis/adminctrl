<?php

namespace App;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public static function getCategoryList()
    {
    	return static::pluck('category_name', 'id');
    }
}
