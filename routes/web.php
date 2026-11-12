<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');//[cite: 43, 44]
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');//[cite: 43, 44]
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
// ==========================================
// LATIHAN ROUTE
// ==========================================

// Latihan 1: Route Sederhana
Route::get('/hello-latihan', function () {
    return 'Hello, Laravel 13!'; //
});

// Latihan 2: Route dengan 1 Parameter
Route::get('/user/{name}', function ($name) {
    return "Hello, " . $name; //[cite: 30, 31]
});

// Latihan 3: Route Banyak Parameter
Route::get('/product/{category}/{id}', function ($category, $id) {
    return "Product Category: " . $category . ", ID: " . $id; //
});

// Latihan 4: Route dengan Default Value Parameter
Route::get('/user-default/{name?}', function ($name = 'Guest') {
    return "Hello, " . $name; //
});

// Latihan 5: Named Route
Route::get('/dashboard', function () {
    return "Welcome to Dashboard"; //
})->name('dashboard');

// Latihan 6: Route Menggunakan Controller
Route::get('/about-latihan', [PageController::class, 'about']); //


// ==========================================
// TUGAS ROUTE
// ==========================================

// Tugas 1 & 3: Route /hello dengan tautan ke about.page
Route::get('/hello', function () {
    $aboutUrl = route('about.page');
    return 'Hello, Laravel! <br><br> <a href="' . $aboutUrl . '">Ke Halaman Tentang Kami</a>'; //[cite: 31, 32]
});

// Tugas 2: Route /welcome/{nama}
Route::get('/welcome/{nama}', function ($nama) {
    return "Selamat datang, " . $nama . "!"; //[cite: 32]
});

// Tugas 3: Named Route /about
Route::get('/about', function () {
    return "Halaman Tentang Kami";
})->name('about.page'); //[cite: 32]

// Tugas 4: Route /contact mengarahkan ke Controller
Route::get('/contact', [PageController::class, 'contact']); //[cite: 32]

// ==========================================
// LATIHAN & TUGAS VIEW
// ==========================================

// Menampilkan Halaman Home
Route::get('/', function () {
    return view('home'); //[cite: 35, 37]
});

// Menampilkan Halaman About Us
Route::get('/about-view', function () {
    return view('about'); //[cite: 35, 37]
});

// Menampilkan Halaman Contact Us
Route::get('/contact-view', function () {
    return view('contact'); //
});