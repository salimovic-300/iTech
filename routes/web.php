<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use OpenAI\Client;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('front.services');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
route::get('/accueil',function(){
    return view('front.accueil');
})->name('accueil');
route::get('/notre_projet', function(){
    return view('front.notre_projet');

})->name('notre_projet');
route::get('/service_ia', function(){
    return view ('front.service_ia_personalisé');
})->name('service_ia');
route::get('/e-commerce_intelligent',function(){
    return view ('front.e-commerce_intelligent');
})->name('e-commerce_intelligent');

route::get('/Web3_blockchain',function(){
    return view ('front.Web3_blockchain');
})->name('Web3_blockchain');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');






require __DIR__.'/auth.php';
Route::get('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce.details');
Route::get('/contact', [EcommerceController::class, 'contact'])->name('contact');
