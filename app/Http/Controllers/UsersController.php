<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
          'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
        User::create($request->validate([
          'first_name' => ['required', 'max:50'],
          'last_name' => ['required', 'max:50'],
          'email' => ['required', 'max:50', 'email'],
        ]));

        return to_route('users.index');
    }
}
