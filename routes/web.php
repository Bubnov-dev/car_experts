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

Route::get('/{id}', [App\Http\Controllers\Controller::class, 'index']);
Route::get('/car/{id}', [App\Http\Controllers\Controller::class, 'car']);
Route::post('/newInvoice',  [\App\Http\Controllers\Controller::class, 'newInvoice']);
Route::post('/newInvoice2',  function (){
    $data = json_decode(file_get_contents('php://input'), true);

    $answers = $data['answers'];
    $phone = $data['contacts']['phone'];
    $email = $data['contacts']['email'];
    $name = $data['contacts']['name'];
    $createdDate = strtotime($data['created']);
    $utm = $data['extra']['utm'];
    $rawAnswers = $data['raw'];

    // Do anything
    \Illuminate\Support\Facades\Log::info($data);

    http_response_code(200);
    exit;
});


Route::get('/pdf/{id}', [\App\Http\Controllers\Controller::class, 'getPdf']);
