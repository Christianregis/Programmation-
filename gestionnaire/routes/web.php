<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
route::get('/home',[TaskController::class,'index'])->name('home');
Route::get('/task' ,[TaskController::class ,'store'])->name('store');

Route::get('/task/all',[TaskController::class ,'show_task'])->name('show_task');

Route::put('/task/{id}/done',[TaskController::class ,'markAsDone'])->name('tasks.markAsDone');
route::delete('/task/{id}',[TaskController::class ,'destroy'])->name('tasks.destroy');

Route::get('/propos',function(){
    return view('propos');
})->name('propos');

Route::get('/form',function(){
    return view('formulaire');
})->name('formulaire');

Route::get('/tasks',[TaskController::class,'filter'])->name('filter');
