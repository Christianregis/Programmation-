<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageIdlController;
use App\Http\Controllers\MessageisrController;
use App\Http\Controllers\MessageIdsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");
Route::get('/propos',function(){
    return view('propos');
})->name('propos');

Route::get('/inscription',[UserController::class,'show_register'])->name("user.inscription");

Route::get('/user',[UserController::class,'store'])->name('user.store');
Route::get('/user/{id}',[UserController::class,'show'])->name('user.show');

// Route de connection
Route::get('/connection',[UserController::class,'show_login_form'])->name('user.connection');
Route::get('/connecton/login',[UserController::class,'login'])->name('user.login');

// Route pour l'affichage de la selection du salon du chat
Route::get('/select-chat', [MessageController::class,'show_select_chat'])->name('user.select-chat');

// Route d'affichage du chat General , IDL et ISR
Route::get('/chat',[MessageController::class,'show_chat'])->name('user.chat');
Route::get('/chat-idl',[MessageIdlController::class,'show_chat'])->name('useridl.chat');
Route::get('/chat-isr',[MessageisrController::class,'show_chat'])->name('userisr.chat');
Route::get('/chat-ids',[MessageIdsController::class,'show_chat'])->name('userids.chat');

// Route pour le stockage et l'affichage des messages du groupe principal
Route::middleware(['auth'])->group(function (){
    Route::get('/message',[MessageController::class,'store'])->name('message.store');
});
Route::get('/messages/create',[MessageController::class,'index'])->name('message.index');

// Route pour le stockage et l'affichage des messages du groupe IDL
Route::middleware(['auth'])->group(function (){
    Route::get('/message-idl',[MessageIdlController::class,'store'])->name('messageidl.store');
});
Route::get('/messages-idl/create',[MessageIdlController::class,'index'])->name('messageidl.index');

// Route pour le stockage et l'affichage des messages du groupe ISR
Route::middleware(['auth'])->group(function (){
    Route::get('/message-isr',[MessageisrController::class,'store'])->name('messageisr.store');
});
Route::get('/messages-isr/create',[MessageisrController::class,'index'])->name('messageisr.index');

// Route pour le stockage et l'affichage des messages du groupe IDS
Route::middleware(['auth'])->group(function (){
    Route::get('/message-ids',[MessageIdsController::class,'store'])->name('messageids.store');
});
Route::get('/messages-ids/create',[MessageIdsController::class,'index'])->name('messageids.index');

// Route pour l'Authentification Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
