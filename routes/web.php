<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProgressController;
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
    return view('auth.login');
});


Route::prefix('progress')->middleware('auth')->group(function () {

    Route::get('/', [ProgressController::class, 'index'])->name('progress.index');
    Route::get('/riwayat', [ProgressController::class, 'riwayat'])->name('progress.riwayat');
    Route::get('/{id}', [ProgressController::class, 'show'])->name('progress.show');
    Route::get('/skripsi/create', [SkripsiController::class, 'create'])->name('skripsi.create');
    Route::post('/skripsi', [SkripsiController::class, 'store']);
    Route::get('/proposal/create', [ProposalController::class, 'create'])->name('proposal.create');
    Route::post('/proposal', [ProposalController::class, 'store']);
    Route::put('/proposalupdate', [ProposalController::class, 'update']);
});

Route::prefix('dosen')->middleware([
    'auth',
    'isDosen',
])->group(function () {

    Route::get('/', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/riwayat', [DosenController::class, 'riwayat'])->name('dosen.riwayat');
    Route::get('/{id}', [DosenController::class, 'show'])->name('dosen.show');
    Route::put('/addingproposal/{id}', [DosenController::class, 'addproposal'])->name('proposal.add');
    Route::put('/tolakproposal/{id}', [DosenController::class, 'tolak']);
    Route::post('/tambahketerangan', [DosenController::class, 'addinformation']);

});

Route::prefix('admin')->middleware([
    'auth',
    'isAdmin',
])->group(function () {
    Route::get('/', [DosenController::class, 'admin'])->name('admin.admin');
});


Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
