<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\SkripsiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/skripsi', [SkripsiController::class, 'index'])->name('skripsi.index');

Route::get('/skripsi/create', [SkripsiController::class, 'create'])->name('skrispi.create');

Route::get('/skripsi/{id}', [SkripsiController::class, 'show'])->name('skrispi.show');

Route::post('/skripsi', [SkripsiController::class, 'store']);

Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal.index');

Route::get('/proposal/create', [ProposalController::class, 'create'])->name('proposal.create');

Route::get('/proposal/{id}', [ProposalController::class, 'show'])->name('proposal.show');

Route::post('/proposal', [ProposalController::class, 'store']);

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');

Route::get('/dosen/{id}', [DosenController::class, 'show'])->name('dosen.show');