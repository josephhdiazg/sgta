<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', fn () =>
    Auth::check()
        ? to_route('home')
        : to_route('login')
)->name('index');

Route::get('/dashboard', fn () => inertia('Dashboard'))->name('dashboard');
Route::get('/home', fn () => inertia('Home'))->name('home');

Route::get('/register', fn () => inertia('Users/Register'))->name('register');
Route::get('/login', fn () => inertia('Users/Login'))->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dev/{view}', fn (string $view) => inertia(str_replace("-", "/", $view)))->name('dev.view'); // FOR DEVELOPMENT ONLY, TODO: remove in production

Route::resource('users', UserController::class);
