<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PackageDetailsController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/index',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/packages',[PackagesController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contactform',[ContactformController::class,'index']);
Route::get('/testimonials',[TestimonialsController::class,'index']);
Route::get('/terms',[TermsController::class,'index']);
Route::get('/package-details',[PackageDetailsController::class,'index']);
Route::get('/blog-details',[BlogDetailsController::class,'index']);

// Route::get('/login',[LoginController::class,'index']);
// Route::get('/registration',[RegisterController::class,'index']);

Route::get('/logout',[LogoutController::class,'index']);

// Route::match(['GET','POST'],'/contactform',[ContactusController::class,'index']);

Route::get('/reg',[ContactusController::class,'index']);
Route::post('/reg',[ContactusController::class,'register']);

//form
Route::get('contact', [ContactformController::class, 'index']);
Route::post('store-form', [ContactformController::class, 'store']);
Route::get('records', [ContactformController::class, 'show']);
//for delete operation

//for edit
Route::get('deletes/{id}', [ContactformController::class, 'delete']);
//edit

Route::get('/editform/{id}', [ContactformController::class, 'editform']);
Route::post('edit-form/{id}', [ContactformController::class, 'update']);


Route::get('/display1',[RegisteredUserController::class,'show']);
Route::get('delete/{id}', [RegisteredUserController::class, 'delete']);
