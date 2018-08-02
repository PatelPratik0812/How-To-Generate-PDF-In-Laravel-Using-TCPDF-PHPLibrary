<?php

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




Route::get('posts','PDFController@index');

Route::get('get-pdf','PDFController@samplePDF');
Route::get('get-download','PDFController@downloadPDF');
Route::get('get-html','PDFController@HtmlToPDF');
Route::post('posts','PDFController@create');
Route::get('data','PDFController@EmployeeData');


?>