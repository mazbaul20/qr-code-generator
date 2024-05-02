<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeGeneratorController;

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
//     return view('welcome');
// });

Route::get('/',[QRCodeGeneratorController::class,'index']);
Route::post('/qr-code',[QRCodeGeneratorController::class,'generateQrCode'])->name('qrcode');
