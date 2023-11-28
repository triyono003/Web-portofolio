<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get("/", [RuteController::class, "index"]);
Route::get("/src/project", [RuteController::class, "project"]);
Route::get("/src/sertifikat", [RuteController::class, "sertifikat"]);

Route::middleware("guest")->group(function () {
  Route::get("/admin/auth/login", [LoginController::class, "create"])->name("login");
  Route::post("/admin/auth/login", [LoginController::class, "store"]);
});

Route::middleware("auth")->group(function () {
  Route::get("/admin/dashboard", [AdminController::class, "create"]);
  Route::post("/admin/dashboard", [AdminController::class, "store"]);
  Route::get("/logout", [LoginController::class, "logout"]);
});

Route::get('/tes',function(){
  return view("tes");
});