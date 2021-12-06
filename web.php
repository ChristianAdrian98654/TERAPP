<?php
use illuminate\Suport\facades\Route;
use App\Http\Controllers\diariosController;


Route::get('/index.html', [diariosController::class, 'index.html' ])
->name('paginalogin');
Route::post('/diarios.html',[LogginController::class, 'diarios.html'])
->name('CapturarRegistroDelLoggin');
