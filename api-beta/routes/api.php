<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

//CRUD

Route::get('/users', [UsersController::class, 'index']);
Route::post('/user', [UsersController::class, 'store']);
Route::patch('user/{user}', [UsersController::class, 'update']);
Route::delete('user/{user}', [UsersController::class, 'remove']);
