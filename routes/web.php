<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("berita/{slug}", [BeritaController::class, "detail"])->name("detail-berita");

Route::get("register", [AuthController::class, "register"])->name("register");
Route::post("prosesRegister", [AuthController::class, "prosesRegister"])->name("prosesRegister");

Route::get("login", [AuthController::class, "login"])->name("login");
Route::post("prosesLogin", [AuthController::class, "prosesLogin"])->name("prosesLogin");
