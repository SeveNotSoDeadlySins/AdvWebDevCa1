<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\FortniteSkinWikiController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Middleware\SetCOOPHeaders;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');
// For Web routes (in routes/web.php)
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');


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

    Route::get('/Players', [PlayerController::class, 'index'])->name('Players.index');
    Route::get('/Players/create', [PlayerController::class, 'create'])->name('Players.create');
    Route::get('/Players/{player}', [PlayerController::class, 'show'])->name('Players.show');
    Route::post('/Players', [PlayerController::class, 'store'])->name('Players.store');

    Route::delete('/Players/{player}', [PlayerController::class, 'destroy'])->name('Players.destroy');
    Route::get('/Players/{player}/edit', [PlayerController::class, 'edit'])->name('Players.edit');
    Route::put('/Players/{player}', [PlayerController::class, 'update'])->name('Players.update');
});









// For later
// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



require __DIR__.'/auth.php';


