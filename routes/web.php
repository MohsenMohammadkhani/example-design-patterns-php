<?php

use App\Http\Controllers\factoryMethod\AccountController;
use App\Http\Controllers\factoryMethod\MessageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AbstractFactory\FormBuilderController;
use App\Http\Controllers\AbstractFactory\DocumentController;
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

Route::get('/test', [TestController::class, 'index']);

Route::get('/factory-method', [MessageController::class, 'publishMessage']);
Route::get('/factory-method/account/register', [AccountController::class, 'register']);

Route::get('/abstract-factory-method', [FormBuilderController::class, 'output']);
Route::get('/abstract-factory-method/document', [DocumentController::class, 'output']);
