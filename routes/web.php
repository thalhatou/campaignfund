<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Donations;
use App\Http\Controllers\homeController;

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



Route::get('/',[homeController::class,"showCampaignsOnHome"]);
Route::middleware(['auth'])->group(function () {
Route::resource('campaign', 'App\Http\Controllers\campaignController');
});


Route::get('/donate', function () {
    return view('campaign.donation');
});


Route::get('/how-it-works', function () {
    return view('how-it-work');
});

Route::get('/pay-status', function () {
    return view('pay-status');
});


Route::get('/dashboard', [homeController::class, "index"])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';



Route::post('/makePayment', [Donations::class, "donate"]);

Route::post('/upload', [campaignController::class, "uploadCoverImage"]);
