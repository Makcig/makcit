<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use \App\Http\Controllers\ProjectController;
// Route for the homepage
Route::get('/', function () {
    return view('welcome');
});

// Route for the CV page
Route::get('/cv', [SkillController::class, 'index'])->name('cv');

// Routes for admin login/logout
Route::get('/admin/login', [AuthController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Grouped routes for admin panel, protected by 'auth:admin' middleware
Route::middleware(['auth:admin'])->group(function () {
    // Admin dashboard
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Create a new skill
    Route::get('/admin/skills', [SkillController::class, 'create'])->name('admin.skills.create');
    // Store a new skill
    Route::post('/admin/skills', [SkillController::class, 'store'])->name('admin.skills.store');
    // Delete a skill by ID
    Route::delete('/admin/skills/{id}', [SkillController::class, 'destroy'])->name('admin.skills.destroy');
    // Update the level of a skill by ID
    Route::patch('/admin/skills/{id}/update-level', [SkillController::class, 'updateLevel'])->name('admin.skills.updateLevel');
});

// Routes for the contact form
Route::get('/contact', [MessageController::class, 'create'])->name('contact.create');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
