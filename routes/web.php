<?php

use App\Http\Controllers\CarteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('carte');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/modifier/motdepasse',[UserController::class,'modifierMotDePasse'])->name("modifier.motdepasse")->middleware(['auth']);
Route::post('/update/password',[UserController::class,'updatePassword'])->name("user.password.update")->middleware(["auth"]);
Route::resource("user",controller:UserController::class);
Route::resource("carte",controller:CarteController::class);
Route::get('/chercher', function () {
    return view('chercher');
});
Route::post('/chercher',[CarteController::class,'chercherParNomPrenomDateNaiss'])->name("chercher.carte")/*->middleware(["auth"])*/;
