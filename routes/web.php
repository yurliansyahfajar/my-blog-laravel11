<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $selected_post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $selected_post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
