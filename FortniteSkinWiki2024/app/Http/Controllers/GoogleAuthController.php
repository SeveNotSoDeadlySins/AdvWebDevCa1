<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Throwable;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to Google’s OAuth page.
     */
    public function redirect()
    {
        // Redirect the user to Google for authentication
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     */
    public function callback()
    {
        try {
            // Try to get a authenticated google user
            $user = Socialite::driver('google')->user();
        } catch (Throwable $e) {
            // If theres a error during the google authenication process. Throw in a error 
            return redirect('/')->with('error', 'Google authentication failed.');
        }

        // Checks if a user with the same email already exists in the database
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // If the users email already exists log them in
            Auth::login($existingUser);
        } else {
            // If the user does not exist, create a new user
            $newUser = User::updateOrCreate([
                'email' => $user->email
            ], [
                'name' => $user->name,
                'password' => bcrypt(Str::random(16)), // Set a random password
                'email_verified_at' => now()
            ]);
            Auth::login($newUser);
        }
        // Will take you to the dashboard page
        return redirect('/dashboard');
    }
}