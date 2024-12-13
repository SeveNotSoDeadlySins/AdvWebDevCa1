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

    // All of my skins
    Route::get('/fortnite-skin-wikis', [FortniteSkinWikiController::class, 'index'])->name('FortniteSkinWikis.index');
    Route::get('/fortnite-skin-wikis/create', [FortniteSkinWikiController::class, 'create'])->name('FortniteSkinWikis.create'); 
    Route::get('/fortnite-skin-wikis/{FortniteSkinWiki}' , [FortniteSkinWikiController::class, 'show'])->name('FortniteSkinWikis.show');
    Route::post('/fortnite-skin-wikis', [FortniteSkinWikiController::class, 'store'])->name('FortniteSkinWikis.store');
    Route::delete('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'destroy'])->name('FortniteSkinWikis.destroy');
    Route::get('/fortnite-skin-wikis/{FortniteSkinWiki}/edit', [FortniteSkinWikiController::class, 'edit'])->name('FortniteSkinWikis.edit');
    Route::put('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'update'])->name('FortniteSkinWikis.update');

    //Search route
    Route::get('/search-skins', [SearchController::class, 'searchSkins']);

    // All of my review
    Route::post('/fortnite-skin-wikis/{fortniteSkinWiki}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

    // All of my players
    Route::get('/Players', [PlayerController::class, 'index'])->name('Players.index');
    Route::get('/Players/create', [PlayerController::class, 'create'])->name('Players.create');
    Route::get('/Players/{player}', [PlayerController::class, 'show'])->name('Players.show');
    Route::post('/Players', [PlayerController::class, 'store'])->name('Players.store');

    Route::delete('/Players/{player}', [PlayerController::class, 'destroy'])->name('Players.destroy');
    Route::get('/Players/{player}/edit', [PlayerController::class, 'edit'])->name('Players.edit');
    Route::put('/Players/{player}', [PlayerController::class, 'update'])->name('Players.update');


});


// Coundnt get through fallback function to work. I think its because of lines like  Route::delete('/fortnite-skin-wikis/{FortniteSkinWiki}', [FortniteSkinWikiController::class, 'destroy'])->name('FortniteSkinWikis.destroy');
// I think i needed to group those all in a if statment but i wasnt sure what to use in the if statment or id have to put somhting into my controller
// Route::fallback(function () {
//     return redirect()->route('FortniteSkinWikis.index');
// });

require __DIR__.'/auth.php';