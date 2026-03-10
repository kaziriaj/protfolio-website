<?php

use App\Http\Controllers\BlogConrtoller;
use App\Http\Controllers\DashboardConrtoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsitePshowController;
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
    return view('homepage');
});

// Route for website

Route::get('/allblogs', [WebsitePshowController::class, 'allblogs'])->name('show.blogs');


Route::get('/dashboard', [DashboardConrtoller::class, 'index'])->name('dashboard')
->middleware('auth','verified');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/blogs',[BlogConrtoller::class,'index'])->name('blog.index');
    Route::get('/blogs/create',[BlogConrtoller::class,'create'])->name('blog.create');
    Route::post('/blogs/store',[BlogConrtoller::class,'store'])->name('blog.store');
});

require __DIR__.'/auth.php';
