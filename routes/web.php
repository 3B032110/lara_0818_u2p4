<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect(route('posts.index'));
});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');

// v1
// Route::get('/', function () {
//     // return view('index');
//     // return view('contact');
//     return view('about');
// });

// Route::get('/post', function () {
//     return view('post');
// });