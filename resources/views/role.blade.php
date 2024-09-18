<php?
user App\Http\Controllers\BookingsController;

Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'page/booking/index' ])->name('/booking')
})
