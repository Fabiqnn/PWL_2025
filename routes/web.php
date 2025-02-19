<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya : ' . $name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-'.$postId.'<br> Komentar ke-'.$commentId;
});

// Route::get('/user/{name?}' , function ($name='John') {
//     return 'Nama Saya = ' . $name;
// });

//percobaan 4 

Route::get('/user/profile' , function () {

}) -> name('profile');

// Route::middleware(['first', 'seccond']) -> group(function () {
//     Route::get('/', function () {

//     });

//     Route::get('/user/profile', function () {

//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {

//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });