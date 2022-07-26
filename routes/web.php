<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/posts', [PostController::class, 'posts']);

Route::get('/author', function () {
    $author = User::latest();

    if (request('search')) {
        $author->where('name', 'like', '%' . request('search') . '%');
    }

    return view('author', [
        'title' => 'Author',
        'datas' => $author->get(),
    ]);
});

Route::get('/postuser/{user:username}', [PostController::class, 'typename']);

Route::get('/typecategory/{category:slug}', [
    CategoryController::class,
    'categorytype',
]);

Route::get('/typeuser/{user:username}', function (User $user) {
    return view('all', [
        'title' => "By User $user->name",
        'datas' => $user->post->load('user', 'category'),
    ]);
});

Route::get('/detail/{post:slug}', [PostController::class, 'detail']);
