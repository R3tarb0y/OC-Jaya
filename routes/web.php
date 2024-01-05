<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KategoriController;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',  [App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/service',  [App\Http\Controllers\ServiceController::class,'index'])->name('service');
Route::get('/gallery',  [App\Http\Controllers\GalleryController::class,'index'])->name('gallery');
Route::get('/contact',  [App\Http\Controllers\ContactController::class,'index'])->name('contact');


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {

    Route::controller(OilController::class)->prefix('oil')->group(function () {
        Route::get('oil', [OilController::class, 'index'])->name('oil.index');
        Route::get('show/{id}', 'show')->name('oil.show');
        Route::get('/{id}/edit', [OilController::class, 'edit'])->name('oil.edit');
        Route::put('/update/{id}', [OilController::class, 'update'])->name('oil.update');
        Route::get('/oil/export/csv/{condemIDs}', 'App\Http\Controllers\OilController@exportCsv')->name('oil.export.csv');
        Route::get('/oil/export/pdf/{condemIDs}', 'App\Http\Controllers\OilController@exportPdf')->name('oil.export.pdf');
        Route::get('/oil/download/pdf', 'App\Http\Controllers\OilController@downloadPdf')->name('oil.download.pdf');
    });

    Route::controller(OilController::class)->prefix('kategori')->group(function () {
        Route::get('/kategori/data',[KategoriController::class,'data'])->name('kategori.data');
        Route::resource('/kategori', KategoriController::class);


    });


    Route::prefix('inventory')->group(function () {
        Route::get('/', [InventoryController::class, 'index'])->name('inventory.index');
        Route::get('/create', [InventoryController::class, 'create'])->name('inventory.create');
        Route::post('/store', [InventoryController::class, 'store'])->name('inventory.store');
        Route::get('/show/{id}', [InventoryController::class, 'show'])->name('inventory.show');
        Route::get('/{id}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
        Route::put('/update/{id}', [InventoryController::class, 'update'])->name('inventory.update');
        Route::post('/inventory/destroy-selected', [InventoryController::class, 'destroySelected'])->name('inventory.destroySelected');
        Route::delete('/destroy/{inventory}', [InventoryController::class, 'destroy'])->name('inventory.destroy');
        Route::get('/print/{ids}',[InventoryController::class, 'barcode'])->name('inventory.print');
    });


    Route::get('/oil', [OilController::class, 'index'])->name('oil');

    Route::controller(CustomController::class)->prefix('custom')->group(function () {
        Route::get('/', [CustomController::class, 'index'])->name('custom');
        Route::get('/showcustom/{conID}', [CustomController::class, 'showcustom'])->name('custom.showcustom');
    });

    // Route::get('/custom', [CustomController::class, 'index'])->name('custom');
    // Route::get('show/{conID}', 'CustomController@show')->name('oil.showcustom');

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');


});

Route::get('/news',  [App\Http\Controllers\NewsController::class,'index'])->name('news');
Route::any('/inventory/printBarcode', [App\Http\Controllers\InventoryController::class,'printBarcode'])->name('inventory.printBarcode');




