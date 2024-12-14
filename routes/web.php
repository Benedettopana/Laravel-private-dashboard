<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;

// Public
Route::get('/', function () {
    return view('home');
})->name('home');

// Rotta GET per il modulo di registrazione
Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');

// Rotta GET per il modulo di login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// registrazione-login-logout
// Rotta POST per inviare i dati di registrazione
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Rotta POST per inviare i dati di login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Rotta protetta per il logout, solo per utenti autenticati
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotte protette con middleware "auth"
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // Corsi
    Route::resource('courses', CourseController::class); //Resource GENERA automaticamente tutte le rotte necessare
});


// Route::middleware('auth:sanctum')->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// // Corsi
// Route::middleware('auth:sanctum')->group(function () {
// });
