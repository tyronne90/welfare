<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RedirectController;

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
    return view('index');
});

// Route::get('/login', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('rr','App\Http\Controllers\RedirectController@index');
Route::get('/redirectcontroller',function() {
   return redirect()->action('App\Http\Controllers\RedirectController@index');
});

// Route::resource('samplefolder', SampleController::class);
Route::resource('/student',StudentController::class);
Route::resource('/job',JobController::class);