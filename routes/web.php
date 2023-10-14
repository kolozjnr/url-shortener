<?php

use App\Models\ShortenerLinks;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortenerLinksController;

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
//     return view('app.index');
// });
Route::get('/', [ShortenerLinksController::class, 'index'])->name("Home");
Route::post('generate', [ShortenerLinksController::class, 'store'])->name('Store');
Route::get('/{code}', [ShortenerLinksController::class, 'redirect'])->name('Redirect');
   
//Route::get('{code}', 'ShortenerLinks@shortenLink')->name('shorten.link');
