<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $city = $request->input('search');

        $apiKey = env('WEATHER_API_KEY');

        $response = Http::get("http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city");

        if ($response->successful()) {
            $data = $response->json();

            return view('home', ['searchData' => $data]);
        } else {
            $statusCode = $response->status();
            $errorMessage = '';

            if ($statusCode === 404) {
                $errorMessage = 'User not found.';
            } else {
                // Handle other error scenarios
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['message'] ?? 'An error occurred.';
            }

            return view('home', ['errorMessage' => $errorMessage]);
        }
    }
}
