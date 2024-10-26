<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ReticulaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('/articulos', function () {
    return view('articulos');
})->middleware(['auth'])->name('articulos');

Route::get('/destapacanos', function () {
    return view('destapacaños');
})->middleware(['auth'])->name('destapacanos');

Route::get('/quimicos', function () {
    return view('quimicos');
})->middleware(['auth'])->name('quimicos');

Route::get('/herramienta', function () {
    return view('herramientas');
})->middleware(['auth'])->name('herramienta');

Route::get('/mezcladoras', function () {
    return view('mezcladoras');
})->middleware(['auth'])->name('mezcladoras');

Route::get('/tuberias', function () {
    return view('tuberias');
})->middleware(['auth'])->name('tuberias');





Route::resource("plazas", PlazaController::class);

Route::resource("puestos", PuestoController::class);

Route::resource("alumnos", AlumnoController::class);

Route::resource("deptos", DeptoController::class);
Route::resource("periodos", PeriodoController::class);
Route::resource("carreras", CarreraController::class);
Route::resource("reticulas", ReticulaController::class);
Route::resource("materias", MateriaController::class);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
