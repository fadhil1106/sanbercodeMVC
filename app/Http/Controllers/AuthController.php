<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }

    public function show(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $name = $firstName . " " . $lastName;
        return view('pages.welcome')->with('name', $name);
    }
}
