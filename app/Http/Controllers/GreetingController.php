<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showGreeting()
    {
        // Data to send to the view
        $name = "Amaya";
        $message = "Welcome to your first Laravel Controller!";

        // Pass data to view called 'greeting'
        return view('greeting', [
            'name' => $name,
            'message' => $message
        ]);
    }
}
