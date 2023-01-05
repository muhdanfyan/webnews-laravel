<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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

// Route::get('/news', [NewsController::class, 'index']);
Route::get('/news', 'NewsController@index');
// Route::get('/news/create', 'NewsController@create');
// Route::post('/news', 'NewsController@store');
// Route::get('/news/{id}', 'NewsController@show');
// Route::get('/news/{id}/edit', 'NewsController@edit');
// Route::patch('/news/{id}', 'NewsController@update');
// Route::delete('/news/{id}', 'NewsController@destroy');

Route::resource('news', 'NewsController');
