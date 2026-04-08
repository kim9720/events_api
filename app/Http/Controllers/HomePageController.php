<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com'
        ];
        return response()->json(['user' => $user]);
    }
}
