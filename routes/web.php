<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public site
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/gallery', [HomeController::class, 'galleryIndex'])->name('gallery.index');
Route::get('/gallery/{gallery}', [HomeController::class, 'galleryShow'])->name('gallery.show');

Route::get('/news', [HomeController::class, 'newsIndex'])->name('news.index');
Route::get('/news/{news}', [HomeController::class, 'newsShow'])->name('news.show');

Route::get('/product', [HomeController::class, 'productIndex'])->name('product.index');
Route::get('/product/{product}', [HomeController::class, 'productShow'])->name('product.show');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Public contact form
|--------------------------------------------------------------------------
*/
Route::post('/contact', [ContactController::class, 'storePublic'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
/*
| TEMPORARY (design preview): saat APP_ENV=local, middleware auth dimatikan
| supaya halaman admin bisa di-scrape alat desain (Figma) tanpa login.
| Di environment lain (production, testing) `auth` tetap aktif.
| Kalau sudah selesai, kembalikan ke: Route::middleware('auth')
*/
$adminMiddleware = app()->environment('local') ? [] : ['auth'];

Route::middleware($adminMiddleware)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard', [
            'counts' => [
                'gallery' => \App\Models\Gallery::count(),
                'news' => \App\Models\News::count(),
                'product' => \App\Models\Product::count(),
                'contact' => \App\Models\Contact::count(),
            ],
        ]);
    })->name('dashboard');

    Route::resource('gallery', GalleryController::class)->names('gallery');
    Route::resource('news', NewsController::class)->names('news');
    Route::resource('product', ProductController::class)->names('product');
    Route::resource('contact', ContactController::class)->names('contact');
});
