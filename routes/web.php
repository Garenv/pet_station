<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetListingController;
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

//Route::get('/pet-listing', function () {
//    return view('pet_listing');
//});

Route::get('/', [PetListingController::class, 'getPetListing'])->name('pet_listing');
Route::get('/pet-detail/{id}', [PetListingController::class, 'getPetDetail'])->name('pet_detail');


