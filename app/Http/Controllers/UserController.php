<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Get users from model
        $users = User::latest()->get();

        // Return view with users
        return view('users', compact('users'));
    }
}
