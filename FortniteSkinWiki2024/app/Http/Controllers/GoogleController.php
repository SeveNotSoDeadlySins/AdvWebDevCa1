<?php
namespace App\Http\Controllers;

use App\Services\GoogleApiService;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    protected $googleApiService;

    public function __construct(GoogleApiService $googleApiService)
    {
        $this->googleApiService = $googleApiService;
    }

    // Redirect to Google OAuth
    public function redirectToGoogle()
    {
        $authUrl = $this->googleApiService->getClient()->createAuthUrl();
        return redirect()->away($authUrl);
    }

    // Handle Google OAuth callback
    public function handleGoogleCallback(Request $request)
    {
        $code = $request->get('code');
        $this->googleApiService->authenticate($code);

        return redirect()->route('home'); // Or wherever you want to redirect after authentication
    }
}
