<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DCMController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AverageController;
use App\Http\Controllers\PDAController;
use App\Http\Controllers\DecisionMatrixController;
use App\Http\Controllers\NDAController;
use App\Http\Controllers\SPController;
use App\Http\Controllers\NSPController;
use App\Http\Controllers\SNController;
use App\Http\Controllers\NSNController;
use App\Http\Controllers\ASController;
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
    return view('dashboard');
});

//route ke file hasil
route::get('/hasil', function () {
    return view('hasil');
});

Route::resource('kriteria', KriteriaController::class);
Route::resource('alternatif', AlternatifController::class);
Route::resource('decfi', DCMController::class);
Route::get('/average', [AverageController::class, 'index'])->name('average.index');
Route::get('/pda', [PdaController::class, 'index'])->name('pda.index');
Route::get('/nda', [NdaController::class, 'index'])->name('nda.index');
Route::get('/sp', [SPController::class, 'index'])->name('sp.index');
Route::get('/nsp', [NSPController::class, 'index'])->name('nsp.index');
Route::get('/sn', [SNController::class, 'index'])->name('sn.index');
Route::get('/nsn', [NSNController::class, 'index'])->name('nsn.index');
Route::get('/as', [ASController::class, 'index'])->name('as.index');
Route::get('/matrixCreate', [DecisionMatrixController::class, 'createForm'])->name('decision_matrix.create.form');
Route::post('/matrixSave', [DecisionMatrixController::class, 'save'])->name('decision_matrix.save');
Route::get('/matrix', [DecisionMatrixController::class, 'index'])->name('decision_matrix.index');
