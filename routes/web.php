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

//Route::get('/', function () {
//    return view('invoice');
//});
//Route::get('/exportPDFDOMPDF', function () {
//    return view('exportPDFDOMPDF');
//});
    Route::get('/', [exportPDFHTMLCSSController::class,'index']);
Route::get('/invoice-pdf',   [ExportPDFDOMPDFController::class,'index'])->name('invoice-pdf');
Route::get('/invoice', function () {
    // return view('invoice');

    $pdf = PDF::loadView('invoice');
    return $pdf->download('invoice.pdf');
});
Route::get('/invoice-pdf', function () {
    // return view('invoice-pdf');

    $pdf = PDF::loadView('invoice-pdf');
    return $pdf
        ->setPaper('a4', 'portrait')
        ->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif'])
         ->setWarnings(false)
        ->download('invoice.pdf');
});
