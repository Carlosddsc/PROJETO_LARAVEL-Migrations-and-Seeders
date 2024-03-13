<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BibliotecaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno',[AlunoController::class,'index']);
Route::get('/post',[PostController::class,'index']);
Route::get('/biblioteca',[BibliotecaController::class,'index']);

