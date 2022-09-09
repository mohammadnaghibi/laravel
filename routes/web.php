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
    return view('welcome');
});

Route::get('mohammads/{mohammad}', function(\App\Models\Mohammad $mohammad): string {
    return $mohammad->first_name;
});

Route::get('posts/{post}', function(\App\Models\Post $post): string {
    return $post->title;
});
