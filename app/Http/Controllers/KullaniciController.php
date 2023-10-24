<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Kullanici;

class KullaniciController extends Controller
{
    public function index()
    {
        return Inertia::render('visit', [
          'users' => Kullanici::all(),
        ]);
    }

    public function store(Request $request)
    {
        Kullanici::create($request->validate([
          'first_name' => ['required', 'max:50'],
          'last_name' => ['required', 'max:50'],
          'email' => ['required', 'max:50', 'email'],
        ]));

        return to_route('visit');
    }
}
