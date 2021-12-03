<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortController;


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

Route::get('/top-one-hundred', [ShortController::class, 'topOneHundredRequest']);
Route::get('/{code}', [ShortController::class, 'redirectUrl']);
Route::post('/shortUrl', [ShortController::class, 'createShortUrl']);

