<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Kullanici;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $items = kullanici::all();

        return Inertia::render('list', [
            'items' => $items,
        ]);

    }
}
