<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,"index"])->middleware('auth')->name("homepage");
Route::match(["get","post"],"/login",[AuthController::class,"login"])->name("login");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");
Route::resource('user', UserController::class);
Route::match(["get","post"],"/admin/login",[AuthController::class,"adminLogin"])->name("admin.login");
Route::get("/admin/logout",[AuthController::class,"adminLogout"])->name("admin.logout");
Route::get("/admin",[AdminController::class,"index"])->middleware('auth:admin')->name("dashboard");
