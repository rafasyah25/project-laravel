<?php

use App\Http\Controllers\auth\authController;
use App\Http\Controllers\Master\KelasController;
use App\Http\Controllers\Master\MahasiswaController;
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
Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [authController::class, 'loginForm'])->name('login');
    Route::post('auth', [authController::class, 'auth'])->name('auth');
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('.dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard')->middleware('auth');

Route::name('master')
        ->prefix('master')
        ->middleware('auth')
        ->group(function () {

            Route::name('.mahasiswa')
                ->prefix('mahasiswa')
                ->group(function () {
                    Route::get('', [MahasiswaController::class, 'list'])
                    ->name('.list');
                    Route::get('simpan', [MahasiswaController::class, 'simpan'])
                    ->name('.simpan');
                    Route::post('store', [MahasiswaController::class, 'store'])->name('.store');
                    Route::get('/{nim}', [MahasiswaController::class, 'show'])
                    ->name('.show');
                });

                Route::name('.kelas')
                ->prefix('kelas')
                ->group(function () {
                    Route::get('', [KelasController::class, 'list'])
                    ->name('.list');
                    Route::get('simpan', [KelasController::class, 'simpan'])
                    ->name('.simpan');
                    Route::post('buat', [KelasController::class, 'buat'])->name('.buat');
                    Route::get('/{kode_kelas}', [KelasController::class, 'show'])
                    ->name('.show');
                });

        });


        Route::get('/', function () {
            return view('welcome');
        });


        Route::get('/cobacoba', function () {
            abort(403);
        });
