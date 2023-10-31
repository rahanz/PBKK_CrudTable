<?php

use App\Http\Controllers\ItemController;
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

// Route::get('/', function () {
//     return view('WebsitePage.TableView');
// });

// Route::get('/Tambah', function () {
//     return view('WebsitePage.TambahData');
// });

Route::resource('/table',ItemController::class);
// Route::get('tambahdata', [ItemController::class, 'create'])->name('tambahdata');