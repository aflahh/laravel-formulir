<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\ArticleController;
use App\Http\Models\Article;
use App\Models\Category;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/formulir');
});

Route::get('/formulir', [FormulirController::class, 'formulir']);
Route::post('/submit', [FormulirController::class, 'submit']);

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('article', [
        'title' => $category->name,
        'articles' => $category->articles
    ]);
});

Route::get('/authors/{user:slug}', function(User $user) {
    return view('article', [
        'title' =>"Articles by ".$user->name,
        'articles' => $user->articles
    ]);
});

Route::get('/categories', function(Category $category){
    return view('categories', [
        'title' => 'Article Categories',
        'categories' => Category::all(),
        'name' => 'categories',
    ]);
});

Route::get('/authors', function(User $user){
    return view('categories', [
        'title' => 'All Authors',
        'categories' => User::all(),
        'name' =>'authors',
    ]);
});
?>