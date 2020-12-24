<?php

use Illuminate\Http\Request;
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
    $links = \App\Models\Link::all();
    return view('welcome',['links'=>$links]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\Link_Controller::class, 'createform']);

Auth::routes();

Route::post('/welcome', [App\Http\Controllers\Link_Controller::class, 'linksform'])->name('link.store');

Auth::routes();