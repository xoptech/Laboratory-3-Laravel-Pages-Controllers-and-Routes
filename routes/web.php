<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'project'])->name('project');
Route::get('/about', [AboutController::class, 'about'])->name('about');