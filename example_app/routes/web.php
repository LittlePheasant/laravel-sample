<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

//->name() = alias to be used in binding

Route::get('/', [TodoListController::class, 'index']) ->name('home');
Route::post('/save-task', [TodoListController::class, 'saveTask']) ->name('saveTask');
Route::get('/delete-task/{id}', [TodoListController::class, 'deleteTask']) ->name('deleteTask');
Route::get('/update-task/{id}', [TodoListController::class, 'updateTask']) ->name('updateTask');
Route::post('/save-updated-task', [TodoListController::class, 'saveUpdatedTask']) ->name('saveUpdatedTask');
