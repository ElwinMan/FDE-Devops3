<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/faq', [FAQController::class, 'index']);
Route::post('/faq', [FAQController::class, 'store'])->middleware(['auth']);
Route::get('/faq/create', [FAQController::class, 'create'])->middleware(['auth']);
Route::get('/faq/{faq}', [FAQController::class, 'show']);
Route::get('/faq/{faq}/edit', [FAQController::class, 'edit'])->middleware(['auth']);
Route::put('/faq/{faq}', [FAQController::class, 'update'])->middleware(['auth']);
Route::delete('/faq/{faq}', [FAQController::class, 'destroy'])->middleware(['auth']);

require __DIR__.'/auth.php';
