<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nim : 2341270170 <br> Nama : Fabian Hasbilllah';
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya : ' . $name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-'.$postId.'<br> Komentar ke-'.$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'ID : ' . $id;
});

// Route::get('/user/{name?}' , function ($name='John') {
//     return 'Nama Saya = ' . $name;
// });

//percobaan 4 

Route::get('/user/profile' , function () {

}) -> name('profile');

Route::middleware(['first', 'seccond']) -> group(function () {
    Route::get('/', function () {

    });

    Route::get('/user/profile', function () {

    });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {

    });
});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});