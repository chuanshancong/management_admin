<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JudgController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\DisapprovalController;
use App\Http\Controllers\OutController;
use App\Http\Controllers\FreezeRequestController;
use App\Http\Controllers\AccountFrozenController;
use App\Http\Controllers\DeleteRequestController;
use App\Http\Controllers\DeletedController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AccountDetailsController;

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

Route::get('/login', function () {
    return view('auth/login');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/juge', [JudgController::class, 'index']);
Route::get('/history', [JudgController::class, 'decision']);
Route::get('/requesthistory', [JudgController::class, 'management']);
Route::get('/out', [OutController::class, 'index']);
Route::get('/disapproval', [DisapprovalController::class, 'index']);
Route::get('/freeze_request', [JudgController::class, 'index']);
Route::get('/account_frozen', [AccountFrozenController::class, 'index']);
Route::get('/delete_request', [DeleteRequestController::class, 'index']);
Route::get('/deleted', [DeletedController::class, 'index']);
Route::get('/report', [ReportController::class, 'index']);
Route::get('/account_Details', [AccountDetailsController::class, 'index']);
Route::post('/juge', [JudgController::class, 'index']);