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

Route::redirect('/', 'school');
Route::view('school', 'school.index')->name('school.index');
Route::view('more', 'school.more')->name('school.more');

Route::view('ak-khk', 'ak-khk.index')->name('ak-khk.index');
Route::view('ntt', 'ntt.index')->name('ntt.index');
Route::view('mtt', 'mtt.index')->name('mtt.index');
Route::view('kmo', 'kmo.index')->name('kmo.index');
