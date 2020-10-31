<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;

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


//Route::get('Admin','PostsController@index')->name('home');
//Route::get('Admin/post/create','PostsController@create');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin_dashboard');
})->name('dashboard');
Route::resource('/Admin/categories', 'CategoriesController',['as'=>'cat']);
Route::resource('/Admin/posts', 'PostsController',['as'=>'admin']);
