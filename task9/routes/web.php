<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/', function () {
    return redirect('/home');
});

Route::view('/home', 'home')->name('home');
Route::view('/ingresos', 'ingresos')->name('ingresos');
Route::view('/gastos', 'gastos')->name('gastos');
Route::view('/reportes', 'reportes')->name('reportes');
Route::view('/contacto', 'contacto')->name('contacto');
