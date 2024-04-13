<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {

    Route::get('/fetchdata', 'showstudents')->name('home');

    Route::get('/student/{id}', 'singlestudents')->name('view.student');

    Route::post('/add', 'insert')->name('insertuser');

    Route::put('/update/{id}', 'update')->name('update.user');
    Route::get('/updatepage/{id}', 'updatepage')->name('update.page');

    Route::get('/delete/{id}', 'delete')->name('deleteuser');
});


Route::view('newusers', '/addusers');
