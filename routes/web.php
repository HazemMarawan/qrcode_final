<?php

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

Route::get('/', 'QrcodeController@index')->name('qrcode_index');

Route::get('/qrcode/generate', 'QrcodeController@GenerateQrCode')->name('generate_qr_code');
Route::get('/qrcode/check/{qrCodeKey}', 'QrcodeController@CheckQrCode')->name('check_qr_code');
Route::get('/qrcode/show/{qrCodeKey}', 'QrcodeController@ShowQrCode')->name('show_qr_code');
Route::get('/qrcode/scan', 'QrcodeController@ScanQRCode')->name('scan_qr_code');
Route::get('/qrcode/validate/{qrCodeKey}', 'QrcodeController@ValidateQRCode')->name('validate_qr_code');

