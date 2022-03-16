<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('pages.home');
});

    
Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/about', function () {
    return view ('pages.about');
});
Route::get('/gallery', function () {
    return view ('pages.gallery');
});
Route::get('/contact', function () {
    return view ('pages.contact');
});
Route::get('/services', function () {
    return view ('pages.services');
});

Route::middleware('auth')->group(function(){
    Route::get('/task', [TaskController::class ,'index']);
    Route::resource('task',TaskController::class);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
