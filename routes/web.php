<?php

use App\Http\Controllers\Datos;
use Illuminate\Support\Facades\Route;


Route::get('/', [Datos::class,'index']);
Route::get('/create', [Datos::class,'create']);
Route::post('/store',[Datos::class,'store']);
Route::get('/show/{id}',[Datos::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Datos::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [Datos::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Datos::class, 'update'])->name('update');