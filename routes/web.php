<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookinguserController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('dashboard');
// });
// Route::get('/testindex', [BookinguserController::class, 'index']);
 Route::post('bookingstore', [BookinguserController::class, 'store'])->name('booking.store');
//Route::post('/bookingstore','BookinguserController@store')->name('booking.store');

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('user');
// Route::get('/loginuser', function () {
//     return view('page/loginuser/loginuser');
// })->name('loginuser');
// Route::get('/registrasi', function () {
//     return view('page/registrasi/registrasi');
// })->name('registrasi');
// Route::get('/booking', function () {
//     return view('page/booking/booking');
// })->name('booking');

Route::get('/booking', function () {
    return view('page/booking/index');
})->name('booking');
Route::get('/pemesanan', [BookingController::class, 'index'])->name('pemesanan');

// routes/web.php

Route::get('/bookings', function () {
    return view('page/booking/booking');
})->name('bookings');

Route::get('/villa', function () {
    return view('page/villa/villa.index');
})->name('villa');

Route::get('/pelanggan', function () {
    return view('page/tamu/pelanggan.index');
})->name('pelanggan');

//ADMIN ROUTE

// Route::get('/', )
Route::get('/admin', function () {
    return view('layouts/navigation1');
})->name('navigation1');
Route::get('/admin', function () {
    return view('page/dashboard');
})->name('dashboard');
Route::get('/kalender', function () {
    return view('page/kalender/kalender');
})->name('kalender');
Route::get('/pemesanan', function () {
    return view('page/pemesanan_villa/list_pemesanan');
})->name('pemesanan');
Route::get('/invoice', function () {
    return view('page/invoice/cetak_invoice');
})->name('invoice');
Route::get('/villa', function () {
    return view('page/villa/list_villa');
})->name('villa');

Route::get('/tambahvilla', function () {
    return view('page/villa/tambah_villa');
})->name('tambahvilla');
Route::get('/tambah-pemesanan-baru', function () {
    return view('page/pemesanan-villa/formulir-reservasi');
})->name('tambah-pemesanan-baru');

Route::get('/tambah-tamu', function () {
    return view('page/tamu/tambah-tamu');
})->name('tambah-tamu');
Route::get('/tambah-pelanggan', function () {
    return view('page/tamu/tambah-pelanggan');
})->name('tambah-pelanggan');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
