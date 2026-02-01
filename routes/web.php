<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BotmanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/', [HomeController::class, 'index']);
Route::get('/cek', function () {
    return view('layouts.home');
});

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contractor', [HomeController::class, 'contractor']);
Route::get('/contractor/detail/{contractor:slug}', [HomeController::class, 'detail_contractor']);

Route::get('/trade', [HomeController::class, 'trade']);
Route::get('/trade/detail/{trade:slug}', [HomeController::class, 'detail_trade']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/portofolio/detail/{portofolio:slug}', [HomeController::class, 'detail_portfolio']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog/detail/{blog:slug}', [HomeController::class, 'detail_blog']);
Route::get('/detail/{id}', [HomeController::class, 'show']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::post('/inbox', [InboxController::class, 'store'])->name('inbox.send');

// Route::get('/karir', [HomeController::class, 'index']);
// Route::get('/hubungi', [HomeController::class, 'index']);

// autentikasi 
Route::get('/admin', [AuthController::class, 'login'])->name('login');
Route::post('/admin', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Admin
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('sliders', SliderController::class);
    Route::resource('trade', TradeController::class);
    Route::resource('contractor', ContractorController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('portofolio', PortofolioController::class);
    Route::resource('team', TeamController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('client', ClientController::class);
    Route::resource('inbox', InboxController::class);
    // Route::delete('inbox/{id}', [InboxController::class, 'destroy'])->name('inbox.destroy');
    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);
});

Route::resource('user', UserController::class)->middleware('role:superadmin');


// chatbot 
Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
Route::get('/chatbot', function () {
    return view('botman');
});
