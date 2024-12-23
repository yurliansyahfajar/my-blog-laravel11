<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "slug" => 'judul-artikel-1',
                "title" => "Judul Artikel 1",
                "author" => "Fajar",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi quo illo veritatis natus in! Illum, perferendis. Porro hic animi saepe, laborum itaque aperiam, voluptatibus iusto neque consequatur molestias non ut?"
            ],
            [
                "id" => 2,
                "slug" => 'judul-artikel-2',
                "title" => "Judul Artikel 2",
                "author" => "Vinta",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi quo illo veritatis natus in! Illum, perferendis. Porro hic animi saepe, laborum itaque aperiam, voluptatibus iusto neque consequatur molestias non ut?"
            ],
        ];
    }


    public static function find($slug)
    {
        $posts = static::all();
        // using anonymous function
        // return Arr::first($posts, function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // using arrow function
        $selected_post =  Arr::first($posts, fn($post) => $post['slug'] == $slug);

        if (!$selected_post) {
            abort(404);
        }

        return $selected_post;
    }
}
