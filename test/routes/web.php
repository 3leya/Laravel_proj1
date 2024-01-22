<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Models\Categorie;
use App\Models\Produit;

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
    return view('auth.login');
});


Route::get('/abc', function () {
    return view('accueil');
});


Route::get('/cba', function () {
    return view('service');
});

Route::get('/cba', function () {
    return view('service');
});


Route::get('/notification', function () {
    return view('Notification');
});


//Partie de la suppression
    Route::get('/list-admin',[AdminController::class,'getAdmin']);
    Route::get('/SuppAdmin/{id}',[AdminController::class,'SuppAdmin']);

    Route::get('/list-produit',[ProduitController::class,'getProduit']);
    Route::get('/SuppProduit/{id}',[ProduitController::class,'SuppProduit']);

    Route::get('/list-categorie',[CategorieController::class,'getCategorie']);
    Route::get('/SuppCategorie/{id}',[CategorieController::class,'SuppCategorie']);

    Route::get('/list-client',[ClientController::class,'getClient']);
    Route::get('/SuppClient/{id}',[ClientController::class,'SuppClient']);

    Route::get('/list-contact',[ContactController::class,'getContact']);
    Route::get('/SuppContact/{id}',[ContactController::class,'SuppContact']);

    // Partie Ajout
    Route::get('/ajout-admin', function () {
        return view('ajout-admin');
    });
    Route::post('/ajout-admin',[AdminController::class,'AddAdmin']);

    Route::get('/ajout-client', function () {
        return view('ajout-client');
    });
    Route::post('/ajout-client',[ClientController::class,'AddClient']);

    Route::get('/ajout-categorie', function () {
        return view('ajout-categorie');
    });
    Route::post('/ajout-categorie',[CategorieController::class,'AddCategorie']);

    Route::get('/ajout-contact', function () {
        return view('ajout-contact');
    });
    Route::post('/ajout-contact',[ContactController::class,'AddContact']);

    Route::get('/ajout-produit', function () {
        return view('ajout-produit');
    });
    Route::post('/ajout-produit',[ProduitController::class,'AddProduit']);

    // Partie de la Modification
    Route::get('/modifier-admin/{id}',[AdminController::class,'getAdminId']);
    Route::get('/modifier-client/{id}',[ClientController::class,'getClientId']);
    Route::get('/modifier-categorie/{id}',[CategorieController::class,'getCategorieId']);
    Route::get('/modifier-produit/{id}',[ProduitController::class,'getProduitId']);

    Route::post('/ModifCategorie',[CategorieController::class,'UpdateCategorie']);
    Route::post('/ModifAdmin',[AdminController::class,'UpdateAdmin']);
    Route::post('/ModifClient',[ClientController::class,'UpdateClient']);
    Route::post('/ModifProduit',[ProduitController::class,'UpdateProduit']);



Route::get('/afficherContact/{id}',[ContactController::class,'updateNotif']);


Route::get('/them', function () {
    return view('theme');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
