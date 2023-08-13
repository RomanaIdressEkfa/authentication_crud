<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Extra;
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
    return view('welcome');
});
//main dashboard template
Route::get('/master', function () {
    return view('backend.master');
});

Route::get('/index',[ExtraController::class,'index'])->name('index');
Route::get('/create',[ExtraController::class,'create'])->name('create');
Route::post('/store',[ExtraController::class,'store'])->name('store');
Route::get('/edit/{id}',[ExtraController::class,'edit'])->name('edit');
Route::post('/update/{id}',[ExtraController::class,'update'])->name('update');
Route::get('/delete/{id}',[ExtraController::class,'delete'])->name('delete');


Route::get('/category_index',[CategoryController::class,'index'])->name('category_index');
Route::get('/category_create',[CategoryController::class,'create'])->name('category_create');
Route::post('/category_store',[CategoryController::class,'store'])->name('category_store');
Route::get('/category_edit/{id}',[CategoryController::class,'edit'])->name('category_edit');
Route::post('/category_update/{id}',[CategoryController::class,'update'])->name('category_update');
Route::get('/category_delete/{id}',[CategoryController::class,'delete'])->name('category_delete');






// login page route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//login page route end





require __DIR__.'/auth.php';
