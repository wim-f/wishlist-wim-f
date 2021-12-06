<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Wishlist;

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
Route::get('posts', [PostController::class,'index'])->name('posts.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
});

Route::get('/wishlist', function () {
    return view('wishlist',[
        'items' => Wishlist::all()
    ]);
});

Route::get('/wishlist/{item}', function (Wishlist $item) {
    return view('item', [
        'item' => $item
    ]);
});

require __DIR__ . '/auth.php';
