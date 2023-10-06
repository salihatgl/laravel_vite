<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgrammingCotroller extends Controller
{
    public function index()
    {
        return Inertia::render('Programming');
    }
}
