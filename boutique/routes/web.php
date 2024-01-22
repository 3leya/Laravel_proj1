<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\panierController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function () {
    return view('home');
});



Route::get('/produit', function () {
    return view('produit');
});


Route::get('/apropos', function () {
    return view('apropos');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/panier', function () {
        return view('panier');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/commande', function () {
        return view('commande');
    });
});

Route::get('/list-admin', function () {
    // Vous pouvez personnaliser cette logique de redirection si nécessaire.
    return redirect('http://test.test/list-admin');
})->name('list-admin');


//Route::get('/reset-cart', [ProduitController::class, 'resetCart'])->name('reset-cart');
//Route::get('/confirmation-page', [ProduitController::class, 'confirmationPage'])->name('confirmation-page');


Route::post('/AddContact',[ContactController::class,'AddContact']);
Route::get('/produit', [ProduitController::class, 'getProduit']);
Auth::routes();

Route::get('/log', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add-to-cart/{id}', [App\Http\Controllers\ProduitController::class, 'addBooktoCart'])->name('add-to-cart')->middleware('auth');
Route::get('/shopping-cart', [App\Http\Controllers\ProduitController::class, 'bookcart'])->name('shopping.cart')->middleware('auth');
Route::get('/delete-cart-product/{id}', [App\Http\Controllers\ProduitController::class, 'deleteProduct'])->name('delete.cart.product')->middleware('auth');
Route::get('/list-produit',[ProduitController::class,'getProduit']);
Route::get('/SuppProduit/{id}',[ProduitController::class,'SuppProduit']);
