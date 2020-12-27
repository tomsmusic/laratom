<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});
//use App\Models\Post;


Route::apiResource('/post', 'PostsController');
Route::apiResource('/category', 'CategoriesController');
Route::apiResource('/bycategory', 'ShowByCategoryController');
Route::apiResource('/bycategory/{id}', 'ShowByCategoryController');
