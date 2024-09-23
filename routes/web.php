<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;


Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('project', [HomePageController::class, 'project'])->name('project');
Route::get('project/{project_name}', [HomePageController::class, 'project_view'])->name('project.view');
Route::get('experience', [HomePageController::class, 'experience'])->name('experience');
Route::get('skills', [HomePageController::class, 'skills'])->name('skill');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact_submit', [ContactController::class, 'contact_submit'])->name('contact.submit');


Route::get('download_cv', [DownloadController::class, 'download_cv'])->name('download.cv');








Route::get('/make_symlink', function () {
  Artisan::call('storage:link');
  return redirect()->route('index');
});