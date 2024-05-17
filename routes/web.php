<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\favController;
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

Route::get('/taiwanvegan', function () {
    return view('taiwanvegan');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/access', function () {
    return view('access');
});


Route::post('/favcontact', [FavController::class, 'favcontact'])->name('favcontact');
Route::post('/unfavcontact', [FavController::class, 'unfavcontact'])->name('unfavcontact');
Route::get('/manage', [ContactController::class, 'manage'])->middleware(['auth'])->name('manage');

Route::post('delete', [ContactController::class, 'delete']);
Route::post('/contact', [ContactController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';
