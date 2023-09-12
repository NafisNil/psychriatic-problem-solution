<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeaturegameController;
use App\Http\Controllers\AtiqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'logo' => LogoController::class,
        'blog' => BlogController::class,
        'slider' => SliderController::class,
        'about' => AboutController::class,
        'featuregame' => FeaturegameController::class,
        'atiq' => AtiqController::class,
        'contact' => ContactController::class
    ]);
});


require __DIR__.'/auth.php';


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about_us');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact_us');
Route::get('/about-atiq', [FrontendController::class, 'atiq'])->name('about_atiq');
Route::get('/blog-all', [FrontendController::class, 'blog'])->name('all_blog');
Route::get('/blog-single/{id}', [FrontendController::class, 'single_blog'])->name('single_blog');