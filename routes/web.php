<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// dasboard route
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
// notification
Route::get('/notification',[DashboardController::class, 'notification'])->name('notification');
// messages
Route::get('/messages',[DashboardController::class, 'messages'])->name('messages');

// bookmarks
Route::get('/bookmarks',[DashboardController::class, 'bookmarks'])->name('bookmarks');

// lists
Route::get('/lists',[DashboardController::class, 'lists'])->name('lists');
// subscription
Route::get('/subscriptions',[DashboardController::class, 'subscription'])->name('subscription');

// profile
Route::get('/profile',[DashboardController::class, 'profile'])->name('profile');

// setting
Route::get('/setting',[DashboardController::class, 'setting'])->name('setting');

// help
Route::get('/help',[DashboardController::class, 'help'])->name('help');



