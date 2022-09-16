<?php

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

Route::prefix('/admin')->group(function (){ 
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('adminDashboard');

//categorty
Route::get('/Category',  [App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('/Category/add', [App\Http\Controllers\CategoryController::class,'addCategory'])->name('addCategory');
Route::post('/Category/store',[App\Http\Controllers\CategoryController::class,'storeCategory'])->name('storeCategory');
Route::get('/Category/edit/{id}',[App\Http\Controllers\CategoryController::class,'editCategory'])->name('editCategory');
Route::post('/Category/update/{id}',[App\Http\Controllers\CategoryController::class,'updateCategory'])->name('updateCategory');
Route::get('/Category/delete/{id}', [App\Http\Controllers\CategoryController::class,'deleteCategory'])->name('deleteCategory');

//Author
Route::get('/author',[App\Http\Controllers\AuthorController::class, 'index'])->name('author.index');
Route::get('/author/add', [App\Http\Controllers\AuthorController::class, 'addAuthor'])->name('addAuthor');
Route::post('/author/store', [App\Http\Controllers\AuthorController::class, 'storeAuthor'])->name('storeAuthor');
Route::get('/author/edit/{id}', [App\Http\Controllers\AuthorController::class, 'editAuthor'])->name('editAuthor');
Route::post('/author/update/{id}', [App\Http\Controllers\AuthorController::class, 'updateAuthor'])->name('updateAuthor');
Route::get('/author/delete/{id}', [App\Http\Controllers\AuthorController::class, 'delete'])->name('deleteAuthor');
Route::get('/table/author', [App\Http\Controllers\AuthorController::class, 'dataTable'])->name('tableAuthor');

//Post  
Route::get('/post', [App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('/post/add', [App\Http\Controllers\PostController::class,'addPost'])->name('addPost');
Route::post('/post/store', [App\Http\Controllers\PostController::class,'storePost'])->name('storePost');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class,'editPost'])->name('editPost');
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class,'updatePost'])->name('updatePost');
Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class,'deletePost'])->name('deletePost');
Route::get('/table/Post', [App\Http\Controllers\PostController::class,'dataTable'])->name('tablePost');

});

Route::get('/admin/logout', 'AdminLoginController@adminLogout')->name('adminLogout');