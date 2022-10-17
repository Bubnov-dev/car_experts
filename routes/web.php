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
    return view('car');
});

Route::get('/newInvoice',  [\App\Http\Controllers\Controller::class, 'newInvoice']);
Route::post('/newInvoice',  [\App\Http\Controllers\Controller::class, 'newInvoice']);


Route::get('/pdf', [\App\Http\Controllers\Controller::class, 'getPdf']);
