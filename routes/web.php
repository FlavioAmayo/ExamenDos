<?php

// routes/web.php

use App\Http\Controllers\AlumnoController;

Route::get('/', [AlumnoController::class, 'ingreso'])->name('ingreso');
Route::post('/store', [AlumnoController::class, 'store'])->name('store');
Route::get('/listado', [AlumnoController::class, 'listado'])->name('listado');
