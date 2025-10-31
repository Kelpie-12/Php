<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');
Route::get('/parent', [PageController::class, 'showParent'])->name('parent');
Route::get('/child', [PageController::class, 'showChild'])->name('child');


Route::prefix('sales')->group(function () {
    Route::get('/create/{s}', function (string $s) {
        return "<br>sales/{$s}";       
    });

      Route::get('/get.sales/{id}', function (string $id) {
        return "<br>sales/{$id}";        
    });
});

Route::prefix('storage')->group(function () {
    Route::prefix('product')->group(function () {        
        Route::get('/create/{s}', function (string $s) {
            return "<br>storage/product/create/{$s}";           
        });
        Route::get('/getIn/{s}', function (string $s) {
            return "<br>storage/product/getIn/{$s}";       
        });
         Route::get('/getOut/{s}', function (string $s) {
            return "<br>storage/product/getOut/{$s}";          
        });
    });

      Route::prefix('info')->group(function () {        
        Route::get('/product/{id}', function (int $id) {
            return "<br>info/product/{$id}";           
        });
        Route::get('/product/{id}/getIn', function (int $id) {
            return "<br>info/product/{$id}/getIn";           
        });      
    });
});

Route::prefix('client')->group(function () {        
        Route::get('/create/{s}', function (string $s) {
            return "<br>client/create/{$s}";           
        });
        Route::get('/update/{s}', function (string $s) {
            return "<br>client/update{$s}";       
        });
         Route::get('/delete/{id}', function (int $id) {
            return "<br>client/delete/{$id}";          
        });
      Route::prefix('info')->group(function () {        
        Route::get('/{id}', function (int $id) {
            return "<br>client/info/{$id}";           
        });
        Route::get('/sales/{client}', function (string $client) {
            return "<br>client/info/create/{$client}";           
        });      
    });
});

Route::prefix('tasks')->group(function () {        
        Route::get('/create/{s}', function (string $s) {
            return "<br>tasks/create/{$s}";           
        });
        Route::get('/update/{s}', function (string $s) {
            return "<br>tasks/update{$s}";       
        });
         Route::get('/delete/{id}', function (int $id) {
            return "<br>tasks/delete/{$id}";          
        });
      Route::prefix('info')->group(function () {        
        Route::get('/{id}', function (int $id) {
            return "<br>tasks/info/{$id}";           
        });
        Route::get('/list/{manager}', function (string $manager) {
            return "<br>tasks/info/list/{$manager}";           
        });      
    });
});


Route::prefix('analitic',function (){
  Route::get('/smena', function () {
            return "<br>analitic/smena";           
        });
          Route::get('/client', function () {
            return "<br>analitic/client";           
        });
            Route::get('/sales', function () {
            return "<br>analitic/sales";           
        });
});


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
