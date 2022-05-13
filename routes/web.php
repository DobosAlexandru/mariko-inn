<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitatiController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\AtractiiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EvenimenteController;
use App\Http\Controllers\BazaSportivaController;
use App\Http\Controllers\LocDeJoacaController;
use App\Http\Controllers\CorporateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear_routes', function () {

    \Artisan::call('route:clear');

    dd("Cache is cleared");

});

Route::get('/', HomeController::class)->name('home');

Route::get('/facilitati', FacilitatiController::class)->name('facilitati');

Route::get('/restaurant', RestaurantController::class)->name('restaurant');

Route::get('/atractii', AtractiiController::class)->name('atractii');

Route::get('/evenimente', EvenimenteController::class)->name('evenimente');

Route::get('/baza-sportiva', BazaSportivaController::class)->name('baza-sportiva');

Route::get('/loc-de-joaca', LocDeJoacaController::class)->name('loc-de-joaca');

Route::get('/corporate', CorporateController::class)->name('corporate');

Route::get('/galerie', function(){
    return view('galerie',[
        'page' => [
            'title' => 'Galerie',
            'description' => '',
        ],
    ]);
});

Route::get('/contact', function(){
    return view('contact',[
        'page' => [
            'title' => 'Contact',
            'description' => '',
        ],
    ]);
});

