<?php

use Illuminate\Support\Facades\Route;

// --- Controller untuk Halaman Publik/User ---
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController; // Pastikan ini mengarah ke Controller luar (bukan folder Admin)

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\EventController as EventAdminController;

// --- Rute User Area ---
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute detail menggunakan {id}
Route::get('/event', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');

Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute Tambahan Pertemuan 2
Route::get('/katalog', [EventController::class, 'index'])->name('katalog');
Route::get('/tentang', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Grouping untuk URL berawalan /admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Rute Login bebas akses
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Mengamankan Route Administrasi di balik tembok (Middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('events', EventAdminController::class);
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');

Route::get('/checkout/{event}', [App\Http\Controllers\CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout/{event}', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');
Route::get('transactions', [\App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('transactions.index');
       
});

});




// --- Rute Admin Area ---
// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

//     // Halaman Dashboard Utama Admin
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//     // Halaman Laporan Transaksi
//     Route::get('/transactions', function () {
//         return view('admin.transactions');
//     })->name('transactions');

//     // TUGAS PERTEMUAN 3: Manajemen Kategori 
//     Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

//     // --- MANAJEMEN EVENT ---
//     // Gunakan Route::resource karena otomatis membuatkan rute admin.events.index, admin.events.create, dll.
//     Route::resource('events', EventAdminController::class);

//     // Catatan: Saya telah menghapus Route::get('/events') manual dan grup admin dobel 
//     // agar tidak terjadi bentrok (conflict) dengan Route::resource di atas.

// });
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('events', EventAdminController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('partners', PartnerController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
