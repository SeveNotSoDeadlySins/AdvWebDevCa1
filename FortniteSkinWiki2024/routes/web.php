<?php

use App\Http\Controllers\FortniteSkinWikiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/fortnite-skin-wikis', [FortniteSkinWikiController::class, 'index'])->name('FortniteSkinWikis.index');
    Route::get('/fortnite-skin-wikis/create', [FortniteSkinWikiController::class, 'create'])->name('FortniteSkinWikis.create');
    Route::get('/fortnite-skin-wikis/{FortniteSkinWiki}' , [FortniteSkinWikiController::class, 'show'])->name('FortniteSkinWikis.show');
    Route::post('/fortnite-skin-wikis', [FortniteSkinWikiController::class, 'store'])->name('FortniteSkinWikis.store');
    Route::get('/fortnite-skin-wikis/{FortniteSkinWiki}/edit', [FortniteSkinWikiController::class, 'edit'])->name('FortniteSkinWikis.edit');
    Route::put('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'update'])->name('FortniteSkinWikis.update');
    Route::delete('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'destroy'])->name('FortniteSkinWikis.destroy');
});

require __DIR__.'/auth.php';