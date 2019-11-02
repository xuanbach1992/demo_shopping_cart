<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("index");
//Route::get("/",function (){
//    return view('index');
//});
Route::prefix("users")->group(function (){
    Route::get('/',"UserController@show")->name('users.list');
    Route::get('/create',"UserController@create")->name('users.create');
    Route::post('/create',"UserController@success")->name('users.create');
    Route::get('/{id}/edit',"UserController@edit")->name('users.edit');
    Route::post('/{id}/edit',"UserController@update")->name('users.edit');
    Route::get('/{id}/delete',"UserController@destroy")->name('users.delete');
    Route::post('/search',"UserController@search")->name('users.search');
});
Route::prefix('groups')->group(function (){
    Route::get("/","GroupController@show")->name("groups.list");
    Route::get("/{id}","GroupController@showUsersByID")->name('groups.showUsers');
//    Route::get("/{id}","GroupController@showTeacherByGroup")->name('groups.showTeachers');
    Route::get('/create',"GroupController@create")->name('groups.create');
    Route::post('/create',"GroupController@success")->name('groupsgroups.create');
    Route::get('/{id}/edit',"GroupController@edit")->name('groups.edit');
    Route::post('/{id}/edit',"GroupController@update")->name('groups.edit');
    Route::get('/{id}/delete',"GroupController@destroy")->name('groups.delete');
});
Route::prefix("teachers")->group(function (){
    Route::get("/","TeacherController@show")->name("teachers.list");
});
Route::prefix("products")->group(function (){
    Route::get("/","ProductController@show")->name("product.list");
    Route::get("/cart/{id}","CartController@addToCart")->name("product.addToCart");
    Route::get("/cart","CartController@showCart")->name("product.showCard");
});

