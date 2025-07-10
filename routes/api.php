<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

// Get all characters
Route::get('characters', [CharacterController::class, 'index']);

// Get single character by ID
Route::get('characters/{id}', [CharacterController::class, 'show']);

// Create character
Route::post('characters', [CharacterController::class, 'store']);

// Update character
Route::put('characters/{id}', [CharacterController::class, 'update']);

// Delete character
Route::delete('characters/{id}', [CharacterController::class, 'destroy']);
