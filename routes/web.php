<?php

use App\Http\Controllers\MenuController;
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

Route::get('/', [MenuController::class, 'show'])->name('main');
Route::post('/', [MenuController::class, 'search'])->name('search');
Route::get('/group/{group}', [MenuController::class, 'showGroup'])->name('group');
Route::get('/admin', [MenuController::class, 'showAdmin'])->name('admin');
Route::get('/delete/{menu?}', [MenuController::class, 'delete'])->name('delete');
Route::get('/edit/{menu?}', [MenuController::class, 'showEdit'])->name('edit');
Route::post('/edit/{menu?}', [MenuController::class, 'cu'])->name('cu');
