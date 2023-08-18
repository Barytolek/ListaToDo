<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listMain;
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

Route::get('/',[listMain::class, 'getData'])->name('listSection');

Route::get('/kontakt', function () {
    return view('index');
})->name('kontakt');

Route::get('/dodawanie', function () {
    return view('index');
})->name('dodaj');

Route::get('/usuwanie',[listMain::class, 'getData'])->name('usun');
Route::post('/usunieto',[listMain::class, 'deleteObject']);
Route::post('/dodano',[listMain::class, 'addObject']);
Route::get('/formError', function () {
    return view('index');
})->name('formError');


