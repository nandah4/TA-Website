<?php

use App\Http\Controllers\ArtikellController;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardArtikelController ;
use App\Http\Controllers\UsersController ;
use App\Http\Controllers\CategoryController ;

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
    return view('home',[
        'title' => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{artikel}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view ('categories', [
        'title' => 'Halaman Kategori',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        "title" => "Halaman Kategori : $category->name_kategori",
        "artikels" => $category->posts
    ]);
}); 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'masuk']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'daftar']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => "Dashboard",
    ]);
})->middleware('auth');


//Route::get('/dashboard/posts/cekslug', [ArtikelController::class, 'cekslug'])->middleware('auth');
// Route::resource('/dashboard/posts', DashboardArtikelController::class);
Route::get('/dashboard/posts', [ArtikellController::class,'index']);

// Route::get('/dashboard/posts', 'App\Http\Controllers\ArtikellController@index');
Route::get('/dashboard/posts/{artikel:slug}', 'App\Http\Controllers\ArtikellController@show');



Route::get('/create', function() {
    return view('dashboard.posts.create', [
        'categories' => Category::all()
    ]);
});
// Route::post('/dashboard/posts', 'App\Http\Controllers\ArtikellController@create');
Route::post('/dashboard/posts', 'App\Http\Controllers\ArtikellController@store');

Route::get('/dashboard/posts/{artikel:slug}/edit', [ArtikellController::class, 'edit']);

// Route::post('/dashboard/posts{artikel:slug}/edit', 'App\Http\Controllers\ArtikellController@edit');
Route::post('/dashboard/posts/edit', 'App\Http\Controllers\ArtikellController@update');


Route::resource('/dashboard/users', UsersController::class);

Route::resource('/dashboard/category', CategoryController::class);
