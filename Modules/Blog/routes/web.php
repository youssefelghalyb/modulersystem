<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Blog\Models\Blog;

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

Route::group([], function () {
    Route::resource('blog', BlogController::class)->names('blog');
});



Route::get('/blog-cr' , function () {

    Blog::create([
        "title"=> "Test Title",
        "content"=> "Test Content",
        "user_id"=> Auth::id()
    ]);
});