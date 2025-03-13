<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmkmController;
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

Route::get("/", [IndexController::class, 'index']);
Route::get("/detail-umkm/{cityId}", [IndexController::class, 'detailUmkm']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('can:manage data umkm')->group(function () {
        Route::prefix('data-umkm')->group(function () {
            Route::get('/', [UmkmController::class, 'index'])->name('getall');
            Route::get('/create', [UmkmController::class, 'create'])->name('createUmkm');
            Route::post('/create', [UmkmController::class, 'storeByForm'])->name('storeByForm');
            Route::post('/', [UmkmController::class, 'store'])->name('storeImport');
            Route::delete('/{id}', [UmkmController::class, 'destroy']);
        });
    });
});

require __DIR__ . '/auth.php';
