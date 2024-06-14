<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[NoteController::class, 'index']);
Route::get('/create',[NoteController::class, 'create']);
Route::post('/store',[NoteController::class, 'store']);
Route::get('/edit/{note:id}',[NoteController::class, 'edit']);
Route::put('/update/{note:id}',[NoteController::class,'update']);
Route::delete('/delete/{note:id}',[NoteController::class,'destroy']);