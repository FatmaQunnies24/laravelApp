<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboartController extends Controller
{
   
    public function index()
    {
        return view('layouts.auth');
    }
    public function signIn()
    {
        return view('password.sign-in');
    }
    public function signUp()
    {
        return view('password.sign-up');
    }
}