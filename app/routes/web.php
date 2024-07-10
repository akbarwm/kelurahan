// routes/web.php

use App\Http\Controllers\domisilicontroller;

Route::get('/domisili', [DomisiliController::class, 'index'])->name('domisili.index');
Route::get('/domisili/create', [DomisiliController::class, 'create'])->name('domisili.create');
Route::post('/domisili/store', [DomisiliController::class, 'store'])->name('domisili.store');
