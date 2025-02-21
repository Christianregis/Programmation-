<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\VideoController;

//Route vers la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('home');
//Route vers la page d'inscription
Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

//Page de connection


// Page de politique de confidentialite
Route::get('/politique', function () {
    return view('politique_co');
})->name('politique');

// Page de politique de confidentialite
Route::get('/propos', function () {
    return view('propos');
})->name('propos');

// Route pour traiter le formulaire
Route::post('/inscription', [UserController::class, 'store'])->name('user.store');

// Route pour afficher les informations de l'utilisateur
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

//Route pour le trie par titre de livre
Route::get('/user/{id}', [UserController::class, 'filter_index_title'])->name('user.show');
// Route pour afficher tous les informations d'un utilisateur
Route::get('/user/information/{id}', [UserController::class, 'show_all'])->name('user.show_all');

//Affichage du nombres d'etudiants inscrit
Route::get('/home', [UserController::class,'index'])->name('home');
Route::get('/', [UserController::class,'index'])->name('home');

//Routes pour creer et  sauvegarder les livres
Route::get('/books/create', [BookController::class,'create'])->name('books.create');
Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::get('/books', [BookController::class,'index'])-> name('books.index');

//Route pour telecharger un pdf
Route::get('/books/download{id}', [BookController::class,'download'])->name('books.download');

// Route vers la page de connection
Route::get('/connection', [UserController::class,'show_connectionPage'])->name('connection');


Route::get('/og',[UserController::class,'login'])->name('connection1');

// Routes pour creer , sauvergarder et afficher les videos
Route::get('/video/create', [VideoController::class,'create'])->name('videos.create');
Route::post('/videos',[VideoController::class,'store'])->name('videos.store');
Route::get('/videos', [VideoController::class,'index'])-> name('videos.index');

// Route pour afficher de formulaire de confirmation de suppression et supprimer un utilisateur
Route::get('/user/delete_account/{id}',[UserController::class,'show_delete_form'])->name('user.delete_form');
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');

Route::get('/forgot/user',[UserController::class,'show_forgot'])->name('show_forgot_password');
Route::get('/forgot',[UserController::class,'recovery_password'])->name('show_forgot');
