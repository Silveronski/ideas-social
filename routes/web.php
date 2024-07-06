<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfiledController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.create');
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
Route::patch('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');


Route::get('/terms', function() {
    return view('terms');
});

Route::get('/profile', [ProfiledController::class, 'index']);