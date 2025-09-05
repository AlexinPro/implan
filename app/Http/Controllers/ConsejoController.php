<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consejo;
use App\Models\Integrante;
use Inertia\Inertia;

class ConsejoController extends Controller
{
    public function index()
    {
        $consejos = Consejo::all();

        return Inertia::render('Consejos/Index', [
            'consejos' => $consejos
        ]);
    }

    public function show($id)
    {
        $consejo = Consejo::with('integrantes')->findOrFail($id);

        return Inertia::render('Consejos/Show', [
            'consejo' => $consejo
        ]);
    }
}
