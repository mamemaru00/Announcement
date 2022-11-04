<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;

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

require __DIR__.'/auth.php';

Route::prefix('announcement')->middleware('auth')->group(function() {
    Route::get('/', [AnnouncementController::class, 'index'])->name('announcement.index');
    Route::get('/list', [AnnouncementController::class, 'list'])->name('announcement.list');
    Route::get('/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');
});

