<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

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

//products
Route::get('/products',[ProductController::class, 'index']);
Route::post('/products/create',[ProductController::class, 'create']);
//comments
Route::get('/comments',[CommentController::class, 'index']);
Route::post('/comments/create',[CommentController::class, 'create']);
//authors
Route::get('/authors',  [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'showOneAuthor']);
Route::post('/authors/create', [AuthorController::class, 'create']);
Route::delete('/authors/delete/{id}', [AuthorController::class, 'delete']);
Route::put('/authors/update/{id}', [AuthorController::class, 'update']);
