<?php

use App\Http\Controllers\ExportPDFDOMPDFController;
use App\Http\Controllers\exportPDFHTMLCSSController;
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
    return view('home');
});
Route::get('/exportPDFDOMPDF', function () {
    return view('exportPDFDOMPDF');
});
Route::get('/export-to-pdf-html-css', [exportPDFHTMLCSSController::class,'index'])->name('export-to-pdf-html-css');
Route::get('/export-to-pdf-dompdf',   [ExportPDFDOMPDFController::class,'index'])->name('export-to-pdf-dompdf');

