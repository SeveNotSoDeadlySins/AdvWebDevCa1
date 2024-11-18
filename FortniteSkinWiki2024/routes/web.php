<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\FortniteSkinWikiController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Will check if the user is logged in before allowing them into these pages
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/fortnite-skin-wikis', [FortniteSkinWikiController::class, 'index'])->name('FortniteSkinWikis.index');
    Route::get('/fortnite-skin-wikis/create', [FortniteSkinWikiController::class, 'create'])->name('FortniteSkinWikis.create'); 
    Route::get('/fortnite-skin-wikis/{FortniteSkinWiki}' , [FortniteSkinWikiController::class, 'show'])->name('FortniteSkinWikis.show');
    Route::post('/fortnite-skin-wikis', [FortniteSkinWikiController::class, 'store'])->name('FortniteSkinWikis.store');
    Route::get('/search-skins', [SearchController::class, 'searchSkins']);
    Route::post('/fortnite-skin-wikis/{fortniteSkinWiki}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::delete('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'destroy'])->name('FortniteSkinWikis.destroy');
    Route::get('/fortnite-skin-wikis/{FortniteSkinWiki}/edit', [FortniteSkinWikiController::class, 'edit'])->name('FortniteSkinWikis.edit');
    Route::put('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'update'])->name('FortniteSkinWikis.update');
});


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



require __DIR__.'/auth.php';


