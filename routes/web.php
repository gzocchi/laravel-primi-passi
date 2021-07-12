<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "info" => [
            "title" => "Laravel Primi Passi",
            "logo" => "https://www.laramind.com/blog/wp-content/uploads/2017/06/LaravelLogo.png",
        ],
        "links" => [
            "docs" => "https://laravel.com/docs",
            "laracasts" => "https://laracasts.com",
            "news" => "https://laravel-news.com",
            "blog" => "https://blog.laravel.com",
            "nova" => "https://nova.laravel.com",
            "forge" => "https://forge.laravel.com",
            "vapor" => "https://vapor.laravel.com",
            "github" => "https://github.com/laravel/laravel",
        ],
        "user" => [
            "name" => "gzocchi",
            "url" => "https://github.com/gzocchi"
        ]
    ];
    return view('home', $data);
});
