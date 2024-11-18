<?php
namespace App\Services;

use Google_Client;
use Google_Service_Sheets; // or any other service you need

class GoogleApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(storage_path('app/credentials.json'));
        $this->client->addScope(Google_Service_Sheets::SPREADSHEETS); // Set scopes for your API
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');
    }

    // Example method to fetch Google Sheets data
    public function getSheetsService()
    {
        $service = new Google_Service_Sheets($this->client);
        return $service;
    }

    // Example method to authenticate user
    public function authenticate($code)
    {
        $accessToken = $this->client->fetchAccessTokenWithAuthCode($code);
        $this->client->setAccessToken($accessToken);

        // Store the access token (e.g., in session or database)
        session(['google_access_token' => $accessToken]);
    }
}
