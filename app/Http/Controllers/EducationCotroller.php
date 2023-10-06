<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EducationCotroller extends Controller
{
    public function index()
    {
        return Inertia::render('Education');
    }
}
