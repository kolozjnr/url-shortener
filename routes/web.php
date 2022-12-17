<?php

use App\Models\ShortenerLinks;
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
    return view('app.index');
});
Route::get('generate-shorten-link', 'ShortenerLinks@index');
Route::post('generate-shorten-link', 'ShortenerLinks@store')->name('generate.shorten.link.post');
   
//Route::get('{code}', 'ShortenerLinks@shortenLink')->name('shorten.link');
