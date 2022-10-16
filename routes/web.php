<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\PageController;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction'])->name('loginAction');

    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/register', [AdminController::class, 'registerAction'])->name('registerAction');

    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/', [AdminController::class, 'index']);

    Route::get('/{slug}/links', [AdminController::class, 'pageLinks'])->name('pageLinks');
    Route::get('/{slug}/design', [AdminController::class, 'pageDesign'])->name('pageDesign');
    Route::get('/{slug}/stats', [AdminController::class, 'pageStats'])->name('pageStats');

    Route::get('/linkorder/{linkid}/{pos}/', [AdminController::class, 'linkOrderUpdate'])->name('linkOrderUpdate');

    Route::get('/{slug}/newlink', [AdminController::class, 'newLink'])->name('newLink');
    Route::post('/{slug}/newlink', [AdminController::class, 'newLinkAction'])->name('newLinkAction');

    Route::get('/{slug}/editlink/{linkid}', [AdminController::class, 'editLink'])->name('editLink');
    Route::post('/{slug}/editlink/{linkid}', [AdminController::class, 'editLinkAction'])->name('editLinkAction');

    Route::get('/{slug}/dellink/{linkid}', [AdminController::class, 'delLink'])->name('delLink');
});

Route::get('/{slug}', [PageController::class, 'index']);
