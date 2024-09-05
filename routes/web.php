<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomePageController;


Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('project', [HomePageController::class, 'project'])->name('project');
Route::get('project/{project_name}', [HomePageController::class, 'project_view'])->name('project.view');
Route::get('experience', [HomePageController::class, 'experience'])->name('experience');
Route::get('skills', [HomePageController::class, 'skills'])->name('skill');