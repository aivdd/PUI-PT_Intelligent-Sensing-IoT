<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/login');

Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [
        \App\Http\Controllers\UserController::class,
        'index',
    ])->name('users.index');

    Route::post('user/store', [
        \App\Http\Controllers\UserController::class,
        'store',
    ])->name('user.store');

    Route::put('user/{id}/update', [
        \App\Http\Controllers\UserController::class,
        'update',
    ])->name('user.update');

    Route::delete('user/{id}/delete', [
        \App\Http\Controllers\UserController::class,
        'destroy',
    ])->name('user.delete');

    Route::get('profile', [
        \App\Http\Controllers\ProfileController::class,
        'show',
    ])->name('profile.show');

    Route::put('profile', [
        \App\Http\Controllers\ProfileController::class,
        'update',
    ])->name('profile.update');

    Route::get('laporan-kinerja', [
        \App\Http\Controllers\LaporanKinerjaController::class,
        'index',
    ])->name('laporan-kinerja.index');

    //pengaturan jenis output route
    Route::get('pengaturan/jenis-output', [
        \App\Http\Controllers\JenisOutputController::class,
        'index',
    ])->name('jenis-output.index');
    Route::post('pengaturan/jenis-output/store', [
        \App\Http\Controllers\JenisOutputController::class,
        'store',
    ])->name('jenis-output.store');
    Route::put('pengaturan/jenis-output/{id}/update', [
        \App\Http\Controllers\JenisOutputController::class,
        'update',
    ])->name('jenis-output.update');
    Route::delete('pengaturan/jenis-output/{id}/destroy', [
        \App\Http\Controllers\JenisOutputController::class,
        'destroy',
    ])->name('jenis-output.destroy');
    //end pengaturan jenis output

    //pengaturan jenis penelitian
    Route::get('pengaturan/jenis-penelitian', [
        \App\Http\Controllers\JenisPenelitianController::class,
        'index',
    ])->name('jenis-penelitian.index');
    Route::post('pengaturan/jenis-penelitian/store', [
        \App\Http\Controllers\JenisPenelitianController::class,
        'store',
    ])->name('jenis-penelitian.store');
    Route::put('pengaturan/jenis-penelitian/{id}/update', [
        \App\Http\Controllers\JenisPenelitianController::class,
        'update',
    ])->name('jenis-penelitian.update');
    Route::delete('pengaturan/jenis-penelitian/{id}/destroy', [
        \App\Http\Controllers\JenisPenelitianController::class,
        'destroy',
    ])->name('jenis-penelitian.destroy');
    //end pengaturan jenis penelitian route

    //pengaturan mitra route
    Route::get('pengaturan/mitra', [
        \App\Http\Controllers\MitraController::class,
        'index',
    ])->name('mitra.index');
    Route::post('pengaturan/mitra/store', [
        \App\Http\Controllers\MitraController::class,
        'store',
    ])->name('mitra.store');
    Route::put('pengaturan/mitra/{id}/update', [
        \App\Http\Controllers\MitraController::class,
        'update',
    ])->name('mitra.update');
    Route::delete('pengaturan/mitra/{id}/destroy', [
        \App\Http\Controllers\MitraController::class,
        'destroy',
    ])->name('mitra.destroy');
    //end pengaturan mitra route

    //pengaturan publisher route
    Route::get('pengaturan/publisher', [
        \App\Http\Controllers\PublisherController::class,
        'index',
    ])->name('publisher.index');
    Route::post('pengaturan/publisher/store', [
        \App\Http\Controllers\PublisherController::class,
        'store',
    ])->name('publisher.store');
    Route::put('pengaturan/publisher/{id}/update', [
        \App\Http\Controllers\PublisherController::class,
        'update',
    ])->name('publisher.update');
    Route::delete('pengaturan/publisher/{id}/destroy', [
        \App\Http\Controllers\PublisherController::class,
        'destroy',
    ])->name('publisher.destroy');
    //end pengaturan publisher route

    //pengaturan status jurnal route
    Route::get('pengaturan/status-jurnal', [
        \App\Http\Controllers\StatusJurnalController::class,
        'index',
    ])->name('status-jurnal.index');
    Route::post('pengaturan/status-jurnal/store', [
        \App\Http\Controllers\StatusJurnalController::class,
        'store',
    ])->name('status-jurnal.store');
    Route::put('pengaturan/status-jurnal/{id}/update', [
        \App\Http\Controllers\StatusJurnalController::class,
        'update',
    ])->name('status-jurnal.update');
    Route::delete('pengaturan/status-jurnal/{id}/destroy', [
        \App\Http\Controllers\StatusJurnalController::class,
        'destroy',
    ])->name('status-jurnal.destroy');
    //end pengaturan status jurnal route

    //pengaturan status laporan route
    Route::get('pengaturan/status-laporan', [
        \App\Http\Controllers\StatusLaporanController::class,
        'index',
    ])->name('status-laporan.index');
    Route::post('pengaturan/status-laporan/store', [
        \App\Http\Controllers\StatusLaporanController::class,
        'store',
    ])->name('status-laporan.store');
    Route::put('pengaturan/status-laporan/{id}/update', [
        \App\Http\Controllers\StatusLaporanController::class,
        'update',
    ])->name('status-laporan.update');
    Route::delete('pengaturan/status-laporan/{id}/destroy', [
        \App\Http\Controllers\StatusLaporanController::class,
        'destroy',
    ])->name('status-laporan.destroy');
    //end pengaturan status jurnal route
});
